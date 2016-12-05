/ this function showes and hide a search fiels=d

jQuery(document).ready(function( $ ) {

 $(".search-field").hide();
    $(".search-submit").click(function(){
        $(".search-field").toggle("slide").focus();
    })

});





















// jQuery(document).ready(function( $ ) {
//
//  $(".main-navigation .search-field").hide();
//     $(".main-navigation .search-submit").click(function(){
//         $(".main-navigation .search-field").toggle("slow").focus();
//     })
//
// });
