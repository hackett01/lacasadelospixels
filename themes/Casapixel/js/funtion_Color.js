/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
flag = true;
$(window).scroll(function () {
    var height = $(window).scrollTop();
    //alert(height);
    test = isScrolledIntoView('.knob');

    if (test && flag) {
        flag = false;
        $('.knob').each(function () {

            var $this = $(this);
            var myVal = $this.attr("rel");
            // alert(myVal);
            $this.knob({
            });
            $({
                value: 0
            }).animate({
                value: myVal
            }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                    $this.val(Math.ceil(this.value)).trigger('change');
                }
            })
        });
    }
});