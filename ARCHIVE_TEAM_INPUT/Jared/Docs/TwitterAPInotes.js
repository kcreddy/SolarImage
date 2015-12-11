////////////////////////////////////////////////////////////////////////////////
//         _______       _ _   _                       _____ _____            //
//        |__   __|     (_) | | |                /\   |  __ \_   _|           //
//           | |_      ___| |_| |_ ___ _ __     /  \  | |__) || |             //
//           | \ \ /\ / / | __| __/ _ \ '__|   / /\ \ |  ___/ | |             //
//           | |\ V  V /| | |_| ||  __/ |     / ____ \| |    _| |_            //
//           |_| \_/\_/ |_|\__|\__\___|_|    /_/    \_\_|   |_____|           //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//           For use with the CARINA_UNM Twitter Handle                       //
//                                                                            //
//            Twitter account created by Jared Morris                         //
//              Contact him or current administrator for login details        //
//                                                                            //
//           API implemented by Jared Morris                                  //
//                                                                            //
//            LAST UPDATE:                                                    //
//              08 JUN 2015                                                   //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//                  This file is commented & spaced                           //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

/*  LEGACY CODE
  window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}
     LEGACY CODE  */




//Uncomment all lines below to embed directly into HTML without linking to the .js file

//(document, "script", "twitter-wjs"));
//<a class="twitter-timeline" href="https://twitter.com/UNM_CARINA" data-widget-id="607398045420904449">Tweets by @UNM_CARINA</a>

//<script>

!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0],
            p=/^http:/.test(d.location)?'http':'https';
    if(!d.getElementById(id)){
        js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js,fjs);}}

(document,"script","twitter-wjs");
//</script>