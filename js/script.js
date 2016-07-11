/* jshint esversion: 6 */
/* global $, document, window, setTimeout, setInterval, clearInterval */

$(document).ready(function () {
    "use strict";

    //Cursor rules
    {
        let cursorIsFrozen = false;

        $(document).click(function () {
            cursorIsFrozen = true;
            //cursor animate on click
            $(".cursor").addClass("is-searching").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () { //on end of animation
                $(".cursor").removeClass("is-searching");
                cursorIsFrozen = false; //unfreeze cursor position after animation
            });
        });

        $(document).mousemove(function (position) {
            if (!cursorIsFrozen) {
                $(".cursor").css({
                    left: position.pageX - 120,
                    top: position.pageY - 130
                });
            }
        });
    }

    //Treasure rules
    $(".treasure").click(function () {
        //show treasure
        $(this).addClass("is-found");
        
        //cross treasure off parchment
        const treasure = $(this).data("treasure");
        $(`[data-treasure-item="${treasure}"]`).addClass("is-checked");
    });

    //Parchment rules
    $(".parchment.is-minimized").click(function (e) {
        $(this).removeClass("is-minimized");
        console.log("click-makebig");
    });
    
    $(".parchment__close-icon").click(function (e) {
        e.stopPropagation(); //prevent parchment click event
        $(".parchment").addClass("is-minimized");
    });
});