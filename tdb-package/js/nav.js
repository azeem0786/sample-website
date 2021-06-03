
/*sidebar*/
$(document).ready(function(){
/*type 4*/
$("#toggle41").click(function(){
$("#toggle41").toggle(200);
$("#toggle42").toggle(200);
$(".nav4 .sidebar").toggle(300);
$(".nav4 .cover").fadeIn(300);
});
$("#toggle42, #cover1,.anchor,.sidetop").click(function(){
  
$("#toggle41").toggle(200);
$("#toggle42").toggle(200);

$(".nav4 .sidebar,.nav4 .cover").fadeOut(200);
});


$(".show_more").mouseover(function(){
$(".expend").fadeIn();
$(".expend1,.expend2,.expend3").fadeOut();
});
// wishlist
$(".show_more1").mouseover(function(){
  $(".expend1").fadeIn();
  $(".expend,.expend2,.expend3").fadeOut();
  });
  // cart
  $(".show_more2").mouseover(function(){
    $(".expend2").fadeIn();
    $(".expend1,.expend,.expend3").fadeOut();
    });
    // login/signup
    $(".show_more3").mouseover(function(){
      $(".expend3").fadeIn();
      $(".expend1,.expend2,.expend").fadeOut();
      });
    //coupon
    $(".coupon").click(function(){
      $(".coupon1").toggle(300);
      });
      //description
      $(".description").click(function(){
        $(".description1,.information1").toggle(100);
        });
        //information
        $(".information").click(function(){
          $(".information1,.description1").toggle(100);
          });
$("section,header").mouseover(function(){
$(".expend,.expend1,.expend2,.expend3,.whatsapp").fadeOut();
});
/*desktop*/
$(".menubar").click(function(){
$(".nav4 .sidebar,.nav4 .cover").toggle();
});
//add to cart option
$(".layer").click(function(){
  $(".addtocart,.layer").fadeOut(200);
  });

  //whatsapp flotting icons
$("#chaticon").mouseover(function(){
  $(".whatsapp").show(200);
  });
 
});



/*navigation bar*/
// $(function(){
//   var prevScroll = 0,
//       curDir = 'down',
//       prevDir = 'up';
  
//   $(window).scroll(function(){
//           if($(this).scrollTop() >= prevScroll){
//           curDir = 'down';
//           if(curDir != prevDir){
//           $('.nav4').stop();
//               $('.nav4').animate({ top: '-100px' }, 300);
//           prevDir = curDir;
//           }
//       } else {
//           curDir = 'up';
//           if(curDir != prevDir){
//           $('.nav4').stop();
//           $('.nav4').animate({ top: '30px' }, 300);
//           prevDir = curDir;
//           }
//       }
//       prevScroll = $(this).scrollTop();
//   });
//   })

  
  

/*contact form*/
$(document).ready(function(){
    $("#sendmessage").click(function(){
        
    var name = $("#name").val().trim();
    var email = $("#email").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();
    var button = $("#sendmessage").val().trim();
    
    if( name != "" && email != "" && phone != "" && message != "" ){
        $("#message1").show();
        $("#message2").hide();
        $(".sending").css({"cursor":"not-allowed"});
        $(".sending").attr({"id":false});
    $("#message1").html("Sending, Please wait...");
    $.ajax({
    url:'contact.php',
    type:'post',
    data:{name:name,  
    email:email,  
    phone:phone,  
    message:message,  
    button:button},
    success:function(response){
    if(response==1){
        $(".sending").css({"cursor":"pointer"});
        $(".sending").attr({"id":"sendmessage"});
    $("#message1").hide();
    $("#message2").show();
    $("#message2").html("Thanks for contacting me.<br> I will contact you soon...");
    }
    else if(response==5){
        $(".sending").css({"cursor":"not-allowed"});
        $(".sending").attr({"id":false});
    $("#message1").hide();
    $("#message2").show();
    $("#message2").html("Please dont try any script..."); 
    }
    else{
    $("#message1").hide();
    $("#message2").html("failed to send message..");
    }
    }
    });
    }
    else{
    window.navigator.vibrate(300);
    if(name == ""){  var msg='Enter Your Name';}
    else if(email == ""){  var msg='Enter Email Address';}
    else if(phone == ""){  var msg='Enter Phone Number';}
    else if(message == ""){  var msg='Write message here...';}
    else {var msg='Fill all details...';}
    $("#message1").fadeIn().html(msg).fadeIn(300);
    }
    });   
    });
    
       

  
    
// chat
$(document).ready(function(){
/*button toggle*/ /*button toggle*/ /*button toggle*/
$("#chaticon").click(function () {
    $("#chaticon").css({ "display": "none" });
    $(".chatbot").css({ "display": "block" });
});
$("#cross, section, header, nav").click(function () {
    $("#chaticon").css({ "display": "block" });
    $(".chatbot").css({ "display": "none" });
});
var var2 = ('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style=" fill:#000000;"><path fill="#81d4fa" d="M24,10c7.72,0,14,6.28,14,14s-6.28,14-14,14s-14-6.28-14-14S16.28,10,24,10 M24,4C12.955,4,4,12.955,4,24s8.955,20,20,20s20-8.955,20-20S35.045,4,24,4L24,4z"></path><path fill="#03a9f4" d="M24,12c6.617,0,12,5.383,12,12s-5.383,12-12,12s-12-5.383-12-12S17.383,12,24,12 M24,8C15.164,8,8,15.164,8,24s7.164,16,16,16s16-7.164,16-16S32.836,8,24,8L24,8z"></path></svg>');
$(".icon1").html(var2);
/*button toggle*/ /*button toggle*/ /*button toggle*/

});

window.onload=function(){
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
    new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
  };



      /*subscribe */
      $(document).ready(function(){
        $("#subscribe").click(function(){
              var subemail = $('#subemail').val().trim();
              var subscribe = $('#subscribe').val().trim();
              $.ajax({
        type:"post",
        url:"contact.php",
        data:{
              subemail:subemail,
              subscribe:subscribe
              }, 
        success: function(data)
        {
     
        $("#subresult1").html(data);
        }
        });
      });
      
      $('#subemail').keypress(function hello(e) {
        if (e.which == 13) {
          
          var subemail = $('#subemail').val().trim();
          var subscribe = $('#subscribe').val().trim();
          $.ajax({
      type:"post",
      url:"contact.php",
      data:{
          subemail:subemail,
          subscribe:subscribe
          }, 
      success: function(data)
      {
      
      $("#subresult1").html(data);
      }
        });
      }
      });
      
      });




     /*signup*/ /*signup*/ /*signup*/
     $(document).ready(function(){
      $("#sign1").click(function(){
        var signname = $("#signname").val().trim();
        var signemail = $("#signemail").val().trim();
        var signphone = $("#signphone").val().trim();
        var signpass = $("#signpass").val().trim();
        var signpass1 = $("#signpass1").val().trim();
        var subject = $("#subject").val().trim();
        var type = $("#type").val().trim();
        var sub = $("#sign1").val().trim();
        if( signname != "" && signemail != "" && signphone != "" && signpass != "" && signpass1 != "" && type != "" && subject != "" ){
          if(signpass != signpass1) {
              $(".message1").html("Opps! Password did not match...");
          } 
          else{
              $(".message1").html("Processing...");
          $.ajax({
                url:'common/signup.php',
                type:'post',
                data:{signname:signname,
                  signemail:signemail,
                  subject:subject,
                  signphone:signphone,
                  signpass:signpass,
                  signpass1:signpass1, 
                  type:type,
                  sub:sub},
                success:function(response){
                    if(response==1){
                        $(".message1").html("");
                      $(".message2").html("Processing...");
                      $(".loader1").show();
                      window.location = "common/otp_signup.php";
                    }
                    else if(response==0){
                      $(".message1").html("Account already exist...");
                      window.navigator.vibrate(400);
                    }
                    else{
                      $(".message1").html("failed to register...");
                      window.navigator.vibrate(400);
                    }
                }
            });
          }
       }
        else{
            window.navigator.vibrate(400);
          $(".message1").html("<p style='color:red'>Fill all details..</p>");
        }
    });
    
    
    $('#signpass1').keypress(function hello(e) {
      if (e.which == 13) {
    var signname = $("#signname").val().trim();
        var signemail = $("#signemail").val().trim();
        var signphone = $("#signphone").val().trim();
        var signpass = $("#signpass").val().trim();
        var signpass1 = $("#signpass1").val().trim();
        var subject = $("#subject").val().trim();
        var type = $("#type").val().trim();
        var sub = $("#sign1").val().trim();
        if( signname != "" && signemail != "" && signphone != "" && signpass != "" && signpass1 != "" && type != "" && subject != "" ){
          if(signpass != signpass1) {
              $(".message1").html("Opps! Password did not match...");
          } 
          else{
              $(".message1").html("Processing...");
          $.ajax({
                url:'common/signup.php',
                type:'post',
                data:{signname:signname,
                  signemail:signemail,
                  subject:subject,
                  signphone:signphone,
                  signpass:signpass,
                  signpass1:signpass1, 
                  type:type,
                  sub:sub},
                success:function(response){
                    if(response==1){
                        $(".message1").html("");
                      $(".message2").html("Processing...");
                      $(".loader1").show();
                      window.location = "common/otp_signup.php";
                    }
                    else if(response==0){
                      $(".message1").html("Account already exist...");
                      window.navigator.vibrate(400);
                    }
                    else{
                      $(".message1").html("failed to register...");
                      window.navigator.vibrate(400);
                    }
                }
            });
          }
       }
        else{
            window.navigator.vibrate(400);
          $(".message1").html("<p style='color:red'>Fill all details..</p>");
        }
      }
    });
    
    
     /*login*/  /*login*/  /*login*/  /*login*/
     $("#log1").click(function(){
      var logemail = $("#logemail").val().trim();
      var logpass = $("#logpass").val().trim();
      var sub1 = $("#log1").val().trim();
      if(logemail != "" && logpass != ""){
            $(".message11").html("Loading...");
        $.ajax({
              url:'common/login.php',
              type:'post',
              data:{logemail:logemail,
                logpass:logpass,
                sub1:sub1},
              success:function(response){
                  if(response==1){
                      $(".message11").html("");
                    $(".message22").html("Logged In...");
                    $(".loader1").show();
                    window.location="index.php";
                  }
                  else if(response==100){
                    $(".message11").html("");
                  $(".message22").html("Account is not approved. We have received your approval request. Please try after 10 minutes.");
                  
                }
                  else{
                    $(".message11").html("failed to login...");
                    window.navigator.vibrate(400);
                  }
              }
          });
     }
      else{
          window.navigator.vibrate(400);
        $(".message11").html("<p style='color:red'>Fill all details..</p>");
      }
    });
              
    
    
    $('#logpass').keypress(function hello(e) {
    if (e.which == 13) {
      var logemail = $("#logemail").val().trim();
      var logpass = $("#logpass").val().trim();
      var sub1 = $("#log1").val().trim();
      if(logemail != "" && logpass != ""){
            $(".message11").html("Loading...");
        $.ajax({
              url:'common/login.php',
              type:'post',
              data:{logemail:logemail,
                logpass:logpass,
                sub1:sub1},
              success:function(response){
                  if(response==1){
                      $(".message11").html("");
                    $(".message22").html("Logged In...");
                    $(".loader1").show();
                    window.location="index.php";
                  }
                  else if(response==100){
                    $(".message11").html("");
                  $(".message22").html("Account is not approved. We have received your approval request. Please try after 10 minutes.");
                  
                }
                  else{
                    $(".message11").html("failed to login...");
                    window.navigator.vibrate(400);
                  }
              }
          });
     }
      else{
          window.navigator.vibrate(400);
        $(".message11").html("<p style='color:red'>Fill all details..</p>");
      }
    }
    });
    
    
    /*password*/  /*password*/  /*password*/  /*password*/
    $("#pass1").click(function(){
      var passemail = $("#passemail").val().trim();
      var passpass = $("#passpass").val().trim();
      var passconfpass = $("#passconfpass").val().trim();
      var sub2 = $("#pass1").val().trim();
      if(passemail != "" && passpass != "" && passconfpass != ""){
          if(passpass != passconfpass) {
              $(".message111").html("Opps! Password did not match...");
          } 
          else{
            $(".message111").html("Changing...");
        $.ajax({
              url:'common/password.php',
              type:'post',
              data:{passemail:passemail,
                passpass:passpass,
                sub2:sub2},
              success:function(response){
                  if(response==1){
                      $(".message111").html("");
                    $(".message222").html("Processing...");
                    $(".loader1").show();
                    window.location = "common/otp_service.php";
                  }
                  else{
                    $(".message111").html("account doesn't exist...");
                    window.navigator.vibrate(400);
                  }
              }
          });
      }
     }
      else{
          window.navigator.vibrate(400);
        $(".message111").html("<p style='color:red'>Fill all details..</p>");
      }
    });
    
    
    $('#passconfpass').keypress(function hello(e) {
    if (e.which == 13) {
      var passemail = $("#passemail").val().trim();
      var passpass = $("#passpass").val().trim();
      var passconfpass = $("#passconfpass").val().trim();
      var sub2 = $("#pass1").val().trim();
      if(passemail != "" && passpass != "" && passconfpass != ""){
          if(passpass != passconfpass) {
              $(".message111").html("Opps! Password did not match...");
          } 
          else{
            $(".message111").html("Changing...");
        $.ajax({
              url:'common/password.php',
              type:'post',
              data:{passemail:passemail,
                passpass:passpass,
                sub2:sub2},
              success:function(response){
                  if(response==1){
                      $(".message111").html("");
                    $(".message222").html("Processing...");
                    $(".loader1").show();
                    window.location = "common/otp_service.php";
                  }
                  else{
                    $(".message111").html("account doesn't exist...");
                    window.navigator.vibrate(400);
                  }
              }
          });
      }
     }
      else{
          window.navigator.vibrate(400);
        $(".message111").html("<p style='color:red'>Fill all details..</p>");
      }
    }
    });
    });
  


    /*owner signup*/ /*signup*/ /*signup*/
//     $(document).ready(function(){
   
    
//     $('#pin-code').keypress(function hello(e) {
//       if (e.which == 13) {
//         $(".message1").html("<span class='c-tdb-green6 bold-tdb6'>Registration successful</span>");
//         var restaurant = $("#restaurant").val().trim();
//         var city = $("#city-name").val().trim();
//         var state = $("#state").val().trim();
//         var street = $("#street").val().trim();
//         var pin = $("#pin-code").val().trim();
//         var register = $("#register").val().trim();
//         if( restaurant != "" && city != "" && state != "" && street != "" && pin != "" ){
         
//               $(".message1").html("Processing...");
//           $.ajax({
//                 url:'myquery.php',
//                 type:'post',
//                 data:{restaurent:restaurent,
//                   city:city,
//                   state:state,
//                   street:street,
//                   pin:pin,
//                   register:register, 
//                   },
//                   success:function(response){
//                     if(response==1){
//                         $(".message1").html("Processing...");
//                       $(".loader1").show();
//                       window.navigator.vibrate(100);
//                       $(".message1").html("<span class='c-tdb-green6 bold-tdb6'>Registration successful<br/>Thank You :)<br/><span class='c-tdb-gray7'><a href='g-menu.php' class='c-tdb-red8'>Click Here</a> to Create Your Restaurant Menu</span>");
//                     }

//                     else if(response==5){
//                       $(".message1").html("Processing...");
//                     $(".loader1").show();
//                     window.navigator.vibrate(400);
//                     $(".message1").html("<span class='c-tdb-orange5 bold-tdb6'>Already Registered User...</span>");
//                   }
                    
//                     else{
//                       $(".message1").html("Something went wrong...");
//                       window.navigator.vibrate(400);
//                     }
//                 }
//             });
//           }
       
//         else{
//             window.navigator.vibrate(400);
//           $(".message1").html("<p class='c-tdb-red8 bold-tdb6'>Fill all details..</p>");
//         }
//     }

//   }); 
// });
    


    
 //typing
 
 var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};




