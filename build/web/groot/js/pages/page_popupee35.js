$(document).ready(function(){$("body").on("click",".form_submit_button",function(e){e.preventDefault(),$(this).addClass("click");var t=$(this).data("form");return void 0===t?$(this).closest("form").submit():$("#"+t).submit(),!1}),$(document).on("click",".accordion",function(){$(this).find("span").toggleClass("icon-down-arrow").toggleClass("icon-up-arrow"),$(document).find("div.accordion-o").toggleClass("hidden")});var e=$("#page_type").val();if("mmt"===e){var t=$("#mmt_code").attr("value");""!==t&&($("#mmt-popup").addClass("active"),$("body").css("overflow","hidden"),$(document).on("submit",".form",function(e){e.preventDefault();var a=$(this).data("method"),r=$(this).data("action"),o=$(this).serialize(),s=$(this);s.find("button").text(),s.find("button");return $.ajax({url:r,type:a,data:o,success:function(e){$("a.action_url").each(function(){var t=$(this).attr("href"),a=t+"?mcd="+e;$(this).attr("href",a)}),$("#mmt-popup").removeClass("active"),$("body").css("overflow","auto")},error:function(e){if(422===e.status){$("#mmt-code").attr("value",t);var a=$.parseJSON(e.responseText).errors;s.find("div.error-message").text(a.mmt_code)}}}),!1}))}else if("jet"==e){if(0===$("#jet-popup").length)return!1;$("#jet-popup").removeClass("hidden"),$("#jet-card-form").submit(function(t){t.preventDefault();var a=$("#jet-card-form");a.find(".error-message").text("");var r=a.data("method"),o=a.data("action"),s=new FormData(a[0]);if("jet"!==e)return!1;$.ajax({url:o,type:r,data:s,cache:!1,contentType:!1,processData:!1,success:function(e){$(".jet-container").hide(),$(".success").show(),$("#jet-code-submit").remove(),$(".jetprivilege-startbooking").removeClass("hidden")},error:function(e){401===e.status?a.find("div.error-message").text("Please login to enter the Jet Privilege Membership Number.").removeClass("green").addClass("red"):422===e.status?a.find("div.error-message").text(e.responseJSON.errors).removeClass("green").addClass("red"):a.find("div.error-message").text("Jet Privilege Membership Number is invalid. Please enter a valid Jet Privilege Membership Number").removeClass("green").addClass("red")}})})}else"foodie_award_deals"===e&&$("a.action_url").each(function(){var e=$(this).attr("href"),t=e+"?destination=foodie_award";$(this).attr("href",t)});$("#detail-page-select-city").on("change",function(){var e=$(this).val();e.length>0?$.ajax({type:"GET",url:"/set-user-city/"+e,data:{code:e},success:function(e){window.location.reload(!0)},error:function(e){window.location.reload(!0)}}):alert("Please select a valid city")})});