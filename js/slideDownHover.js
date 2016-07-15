/**
 * Created by HORNET on 12.07.2016.
 */

$(function(){


    $('.link-down,.block-right-1').hover(
        function () {
            $('.block-ul-1').css("height","425px");
        },
        function () {
            $('.block-ul-1').css("height","");
        }
    );
    $('.link-down2,.block-right-4').hover(
        function () {
            $('.block-ul-1').css("height","485px");
        },
        function () {
            $('.block-ul-1').css("height","");
        }
    );
});