// Toast
!function(e){e(["jquery"],function(e){return function(){function t(e,t,n){return g({type:O.error,iconClass:m().iconClasses.error,message:e,optionsOverride:n,title:t})}function n(t,n){return t||(t=m()),v=e("#"+t.containerId),v.length?v:(n&&(v=d(t)),v)}function o(e,t,n){return g({type:O.info,iconClass:m().iconClasses.info,message:e,optionsOverride:n,title:t})}function s(e){C=e}function i(e,t,n){return g({type:O.success,iconClass:m().iconClasses.success,message:e,optionsOverride:n,title:t})}function a(e,t,n){return g({type:O.warning,iconClass:m().iconClasses.warning,message:e,optionsOverride:n,title:t})}function r(e,t){var o=m();v||n(o),u(e,o,t)||l(o)}function c(t){var o=m();return v||n(o),t&&0===e(":focus",t).length?void h(t):void(v.children().length&&v.remove())}function l(t){for(var n=v.children(),o=n.length-1;o>=0;o--)u(e(n[o]),t)}function u(t,n,o){var s=!(!o||!o.force)&&o.force;return!(!t||!s&&0!==e(":focus",t).length)&&(t[n.hideMethod]({duration:n.hideDuration,easing:n.hideEasing,complete:function(){h(t)}}),!0)}function d(t){return v=e("<div/>").attr("id",t.containerId).addClass(t.positionClass),v.appendTo(e(t.target)),v}function p(){return{tapToDismiss:!0,toastClass:"toast",containerId:"toast-container",debug:!1,showMethod:"fadeIn",showDuration:300,showEasing:"swing",onShown:void 0,hideMethod:"fadeOut",hideDuration:1e3,hideEasing:"swing",onHidden:void 0,closeMethod:!1,closeDuration:!1,closeEasing:!1,closeOnHover:!0,extendedTimeOut:1e3,iconClasses:{error:"toast-error",info:"toast-info",success:"toast-success",warning:"toast-warning"},iconClass:"toast-info",positionClass:"toast-top-right",timeOut:5e3,titleClass:"toast-title",messageClass:"toast-message",escapeHtml:!1,target:"body",closeHtml:'<button type="button">&times;</button>',closeClass:"toast-close-button",newestOnTop:!0,preventDuplicates:!1,progressBar:!1,progressClass:"toast-progress",rtl:!1}}function f(e){C&&C(e)}function g(t){function o(e){return null==e&&(e=""),e.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}function s(){c(),u(),d(),p(),g(),C(),l(),i()}function i(){var e="";switch(t.iconClass){case"toast-success":case"toast-info":e="polite";break;default:e="assertive"}I.attr("aria-live",e)}function a(){E.closeOnHover&&I.hover(H,D),!E.onclick&&E.tapToDismiss&&I.click(b),E.closeButton&&j&&j.click(function(e){e.stopPropagation?e.stopPropagation():void 0!==e.cancelBubble&&e.cancelBubble!==!0&&(e.cancelBubble=!0),E.onCloseClick&&E.onCloseClick(e),b(!0)}),E.onclick&&I.click(function(e){E.onclick(e),b()})}function r(){I.hide(),I[E.showMethod]({duration:E.showDuration,easing:E.showEasing,complete:E.onShown}),E.timeOut>0&&(k=setTimeout(b,E.timeOut),F.maxHideTime=parseFloat(E.timeOut),F.hideEta=(new Date).getTime()+F.maxHideTime,E.progressBar&&(F.intervalId=setInterval(x,10)))}function c(){t.iconClass&&I.addClass(E.toastClass).addClass(y)}function l(){E.newestOnTop?v.prepend(I):v.append(I)}function u(){if(t.title){var e=t.title;E.escapeHtml&&(e=o(t.title)),M.append(e).addClass(E.titleClass),I.append(M)}}function d(){if(t.message){var e=t.message;E.escapeHtml&&(e=o(t.message)),B.append(e).addClass(E.messageClass),I.append(B)}}function p(){E.closeButton&&(j.addClass(E.closeClass).attr("role","button"),I.prepend(j))}function g(){E.progressBar&&(q.addClass(E.progressClass),I.prepend(q))}function C(){E.rtl&&I.addClass("rtl")}function O(e,t){if(e.preventDuplicates){if(t.message===w)return!0;w=t.message}return!1}function b(t){var n=t&&E.closeMethod!==!1?E.closeMethod:E.hideMethod,o=t&&E.closeDuration!==!1?E.closeDuration:E.hideDuration,s=t&&E.closeEasing!==!1?E.closeEasing:E.hideEasing;if(!e(":focus",I).length||t)return clearTimeout(F.intervalId),I[n]({duration:o,easing:s,complete:function(){h(I),clearTimeout(k),E.onHidden&&"hidden"!==P.state&&E.onHidden(),P.state="hidden",P.endTime=new Date,f(P)}})}function D(){(E.timeOut>0||E.extendedTimeOut>0)&&(k=setTimeout(b,E.extendedTimeOut),F.maxHideTime=parseFloat(E.extendedTimeOut),F.hideEta=(new Date).getTime()+F.maxHideTime)}function H(){clearTimeout(k),F.hideEta=0,I.stop(!0,!0)[E.showMethod]({duration:E.showDuration,easing:E.showEasing})}function x(){var e=(F.hideEta-(new Date).getTime())/F.maxHideTime*100;q.width(e+"%")}var E=m(),y=t.iconClass||E.iconClass;if("undefined"!=typeof t.optionsOverride&&(E=e.extend(E,t.optionsOverride),y=t.optionsOverride.iconClass||y),!O(E,t)){T++,v=n(E,!0);var k=null,I=e("<div/>"),M=e("<div/>"),B=e("<div/>"),q=e("<div/>"),j=e(E.closeHtml),F={intervalId:null,hideEta:null,maxHideTime:null},P={toastId:T,state:"visible",startTime:new Date,options:E,map:t};return s(),r(),a(),f(P),E.debug&&console&&console.log(P),I}}function m(){return e.extend({},p(),b.options)}function h(e){v||(v=n()),e.is(":visible")||(e.remove(),e=null,0===v.children().length&&(v.remove(),w=void 0))}var v,C,w,T=0,O={error:"error",info:"info",success:"success",warning:"warning"},b={clear:r,remove:c,error:t,getContainer:n,info:o,options:{},subscribe:s,success:i,version:"2.1.3",warning:a};return b}()})}("function"==typeof define&&define.amd?define:function(e,t){"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):window.toastr=t(window.jQuery)});

// Potwierdzenie
(function(a){a.confirm=function(c){if(a("#confirmOverlay").length){return false}var f="";a.each(c.buttons,function(h,g){f+='<a href="#" class="'+g["class"]+'">'+h+"<span></span></a>";if(!g.action){g.action=function(){}}});var e=['<div id="confirmOverlay">','<div class="modal fade show" id="confirmBox"><div class="modal-dialog modal-dialog-centered"><div class="modal-content">','<div class="modal-header"><h5 class="modal-title">',c.title,"</h5></div>",'<div class="modal-body">',c.message,"</div>",'<div id="confirmButtons" class="modal-footer">',f,"</div></div></div>"].join("");a(e).hide().appendTo("body").fadeIn();var b=a("#confirmBox .btn"),d=0;a.each(c.buttons,function(g,h){b.eq(d++).click(function(){h.action();a.confirm.hide();return false})})};a.confirm.hide=function(){a("#confirmOverlay").fadeOut(function(){a(this).remove()})}})(jQuery);

function show5(){if(document.layers||document.all||document.getElementById){var e=new Date,c=e.getHours(),o=e.getMinutes(),t=e.getSeconds();0==c&&(c=12),o<=9&&(o="0"+o),t<=9&&(t="0"+t),myclock=c+":"+o+":"+t+" ",document.layers?(document.layers.liveclock.document.write(myclock),document.layers.liveclock.document.close()):document.all?liveclock.innerHTML=myclock:document.getElementById&&(document.getElementById("liveclock").innerHTML=myclock),setTimeout("show5()",1e3)}}window.onload=show5;

// Pomoc przy sortowaniu
const fixHelper = function (b, a) {
    a.children().each(function () {
        var c = $(this).clone();
        $(this).width($(this).width())
    });
    return a
};

// Sortowanie listy
jQuery.fn.sortuj = function(a) {
    this.sortable({
        cursor: "move",
        handle: ".move-button",
        start: function(d, c) {
            var b = $(this).sortable("instance");
            c.placeholder.height(c.helper.height());
            b.containment[3] += c.helper.height() * 1.5 - b.offset.click.top;
            b.containment[1] -= b.offset.click.top
        },
        helper: function(b, c) {
            c.children().each(function() {
                $(this).width($(this).width())
            });
            return c
        },
        zIndex: 9999,
        containment: "#sortable",
        axis: "y",
        update: function() {
            var b = $(this).sortable("serialize");
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });
            $.ajax({
                data: b,
                type: "POST",
                url: a,
                success: function(c) {
                    $("#jqalert").prepend('<div class="alert alert-success border-0 none mb-0" role="alert">Zmiana zapisana</div>');
                    $(".alert").fadeIn(500);
                    setTimeout(function() {
                        $(".alert").slideUp(500,function(){$(this).remove()})
                    }, 3000)
                },
                error: function() {
                    $("#jqalert").prepend('<div class="alert alert-danger border-0 none mb-0" role="alert">Wystąpił błąd</div>');
                    $(".alert").fadeIn(500);
                    setTimeout(function() {
                        $(".alert").slideUp(500,function(){$(this).remove()})
                    }, 3000)
                }
            })
        }
    }).disableSelection()
};

// Sortowanie galerii
jQuery.fn.sortujGal = function(a) {
    this.sortable({
        cursor: "move",
        handle: ".move-button",
        zIndex: 9999,
        containment: "#sortable",
        dropOnEmpty: false,
        start: function(d, c)
        {
            const b = $(this).sortable("instance");
            b.containment[3] += c.helper.height() * 1.5 - b.offset.click.top;
            b.containment[1] -= b.offset.click.top
        },
        update: function() {
            var b = $(this).sortable("serialize");
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });
            $.ajax({
                data: b,
                type: "POST",
                url: a,
                success: function(c) {
                    $("#jqalert").prepend('<div class="alert alert-success border-0 none mb-0" role="alert">Zmiana zapisana</div>');
                    $(".alert").fadeIn(500);
                    setTimeout(function() {
                        $(".alert").slideUp(500,function(){$(this).remove()})
                    }, 3000)
                },
                error: function() {
                    $("#jqalert").prepend('<div class="alert alert-danger border-0 none mb-0" role="alert">Wystąpił błąd</div>');
                    $(".alert").fadeIn(500);
                    setTimeout(function() {
                        $(".alert").slideUp(500,function(){$(this).remove()})
                    }, 3000)
                }
            })
        }
    }).disableSelection()
};

!function(t,n,e,i){"use strict";var a,s="inputCharCount",u={enableMaxAttributeName:"data-input-char-count-enable-max",displayMaxValue:!1,labelClasses:"form-control-character-count",maxValue:-1},r={toBoolean:function(t,n){return!!function(t,n){var e,i,a=t.toLowerCase();for(n=n?[].concat(n):[],e=0;e<n.length;e+=1)if(i=n[e]){if(i.test&&i.test(t))return!0;if(i.toLowerCase()===a)return!0}return!1}(a(t),n||["true","1"])},toString:a=function(t){return null==t?"":function(t){if("string"==typeof t)return t;var n=t+"";return"0"===n&&1/t===-1/0?"-0":n}(t)}},o=function(t, n){var e=n.val().length,i=t.displayMaxValue?t.maxValue:void 0;return i?e+" / "+i:e};function l(n, e){this.$el=n instanceof jQuery?n:t(n),this.settings=t.extend({},u,e),this._defaults=u,this._name=s,this.init()}t.extend(l.prototype,{init:function(){this.initializeSettings();var n,e,i=o(this.settings,this.$el),a=(n=this.settings,e=i,t('<span class="'+n.labelClasses+'">'+e+"</span>")),s=this;this.$el.after(a),this.$el.on("input",function(){a.html(o(s.settings,s.$el))})},initializeSettings:function(){var t=this.$el.attr("maxlength"),n=this.$el.attr(this.settings.enableMaxAttributeName),e=!n||r.toBoolean(n);this.settings.maxValue=t,this.settings.displayMaxValue=t&&e}}),t.fn[s]=function(n){return this.each(function(){t.data(this,"plugin_"+s)||t.data(this,"plugin_"+s,new l(this,n))})},t(function(){t('input[type="text"].input-char-count, textarea.input-char-count').inputCharCount()})}(jQuery,window,document);


$(document).ready(function(){
	$('#togglemenu').click(function(e) {
		e.preventDefault();
		$('body').toggleClass('icon-menu');
	});

	// $('[data-toggle="tooltip"]').tooltip();
    // $('[data-toggle="tooltip"]').click(function () {
    //     $('[data-toggle="tooltip"]').tooltip("hide");
    // });

    $(".confirm").click(function(d) {
        d.preventDefault();
        var c = $(this).closest("form");
        var a = c.attr("action");
        var f = $(this).data("id");
        var b = $("meta[name='csrf-token']").attr("content");
        $.confirm({
            title: "Potwierdzenie usunięcia",
            message: "Czy na pewno chcesz usunąć?",
            buttons: {
                Tak: {
                    "class": "btn btn-primary",
                    action: function() {
                        $.ajax({
                            url: a,
                            type: "DELETE",
                            data: {
                                _token: b,
                            },
                            success: function() {
                                location.reload();
                            }
                        })
                    }
                },
                Nie: {
                    "class": "btn btn-secondary",
                    action: function() {}
                }
            }
        })
    });

    $('#toggleparam').click(function(e)
    {
        e.preventDefault();
        $('.toggleRow').toggle();
    });

    $('#form_metry').keyup(function()
    {
        const number = $(this).val().replace(/,/g, '.');
        $('#form_szukaj_metry').val(Math.round(number));
    });

});
