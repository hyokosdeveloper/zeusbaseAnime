// wrap in a function so we can extend the given object and export 
// API functions (e.g. shuffle)

(function(object){
  
  // waits for the document to be fully loaded (without images)
  document.observe('dom:loaded', function(){
    var cards = $$('div.card'), SIZE = 150, 
      currentId = null, blocked = false, score = 0, tries = 0;
      
    function urlForId(id){ 
      return 'picture_'+id+'.png'; 
    }

    // preload images $R(1,8) is like [1,2,3,4,5,6,7,8] (for this purpose)
    $R(1,8).each(function(id){
      var img = new Image();
      img.src = urlForId(id);
    });

    // shuffle resets and shuffles the cards
    function shuffle(duration){
      $('score').innerHTML = score = 0;
      $('tries').innerHTML = tries = 0;
      
      // randomize cards and reposition them randomly, in a 4x4 grid
      // 1. make sure all positions change place
      // this can take several iterations
      // [].concat() is used to create a copy of an array
      var currentOrder = [].concat(cards), matches = true;
      while(matches){
        // zip combines two arrays into one
        // [1,2].zip(['a','b']) --> [[1, "a"], [2, "b"]]
        // this can be used to compare two arrays (in this case, find "any" matching pairs)
        cards = cards.sortBy(Math.random);
        matches = cards.zip(currentOrder).any(function(pair) { return pair[0] === pair[1]; });
      }
      
      // 2. animate cards to go to new positions
      cards.inGroupsOf(4).each(function(group, x) {
        group.each( function(card, y){
          flip(card, 'back.png');
          card.morph('opacity:1;left:'+(x*SIZE)+'px;top:'+(y*SIZE)+'px', {
            duration: duration || 0.5, transition: 'easeInOutQuint'
          });
        });
      });

      // randomize cards, and assign the same picture id to each group of 2 cards
      cards.sortBy(Math.random).inGroupsOf(2).each(function(group, index) {
        group.invoke('store', 'picture_id', index+1);
      });
    }
    
    function flip(element, image){
      var img = element.down('img');
      img.morph('width:0px;left:70px;', {
        duration: .2, transition: 'easeInCubic',
        after: function(){
          if(image) img.src = image;
          img.morph('width:140px;left:0px', {
            duration: .2, transition: 'easeOutCubic'
          });
        }
      });
    }

    function reveal(element){
      // grab the picture id from Prototype's element storage system
      if(element.retrieve('picture_revealed')) return;
      var id = element.retrieve('picture_id'), img = element.down('img');
      element.store('picture_revealed', true);
      flip(element, urlForId(id));
      return id;
    }
    
    function hide(element){
      if(!element.retrieve('picture_revealed')) return;
      var img = element.down('img');
      element.store('picture_revealed', false);
      flip(element, 'back.png');
    }
    
    function updatescore(){
      $('score').update(score).setStyle('color:#77a638').morph('color:#aaa', 2);
    }
    
    function win(){
      cards.each(function(card){
        card.morph('opacity:1');
        flip(card, urlForId(card.retrieve('picture_id')));
        card.store('picture_revealed', false);
        card.morph('top:0px;margin-left:'+((Math.random()*50) - 25)+'px', {
          propertyTransitions: {
            opacity: 'easeInOutQuart',
            marginLeft: 'pulse',
            top: 'bounce'
          },
          delay: 0.4+Math.random()*5,
          duration: 3+Math.random()*7
        }).morph('opacity:0;top:-100px;margin-left:0',2);
      });
      
      shuffle.delay(17);
    }
    
    function dispatchClick(event, element){
      // don't accept click events while the UI is blocked
      if(blocked) return;
      
      if(!element.retrieve('picture_revealed')){
        var id = reveal(element);
        
        $('tries').innerHTML = (++tries);
            
        // second card revealed, check if we have a matching card pair
        if(currentId){
          blocked = true;
          // yes, up score and run nice animation to remove the cards
          if(currentId == id){
            score++;
            updatescore.delay(1);
            
            (function(){
              cards.findAll(function(card){
                return card.retrieve('picture_id') == id;
              }).each(function(card){
                card.morph('opacity:0',{
                  transition: 'pulse', duration: 1
                });
              });
              blocked = false;
            }).delay(0.5);
            
            if(score==8) win.delay(1.5);
          // no, hide all cards (after 1 second)
          } else {
            (function(){ 
              cards.each(function(card){ hide(card); });
              blocked = false;
            }).delay(1);
          }
          currentId = null;
        // first card revealed
        } else {
          currentId = id;
        }
      }
    }

    $('field').on('click', 'div.card', dispatchClick);
    shuffle();

    Object.extend(object, { shuffle: shuffle, win: win });
  });
  
})(window);