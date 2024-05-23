//navbar
$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('.navbar').addClass('black');
    } else {
        $('.navbar').removeClass('black');
    }
})


$(window).on('load', function() {
    $('.carousel-container .title h1').addClass('muncul');
});



// parallax
// $(window).scroll(function() {
//     var wScroll = $(this).scrollTop();

//     // parallax
//     $('.title h1').css({
//         'transform' : 'translate(0px, '+ wScroll/8 +'%)'
//     });

    
// });

// carousel
const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide img');

// buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

// counter
let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

// button lsiteners //#endregion

nextBtn.addEventListener('click',()=>{
    if (counter >= carouselImages.length - 1) return;
    carouselSlide.style.transition = "transform 0.8s ease-out";
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click',()=>{
    if (counter <= 0) return;
    carouselSlide.style.transition = "transform 0.8s ease-out";
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

carouselSlide.addEventListener('transitionend', ()=>{
    if (carouselImages[counter].id === 'lastClone'){
        carouselSlide.style.transition = "none";
        counter = carouselImages.length -2 ;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

    if (carouselImages[counter].id === 'firstClone'){
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - counter ;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
});






function validation(){

    var username = 'dimasnugroho673';
    var password = 'admin';

    var userName = document.getElementById('username').value;
    var passWord = document.getElementById('password').value;

    if((username == userName) && (password == passWord)) {
        Swal(
            'Sukses!',
            'Anda berhasil masuk dan dapat melakukan reservasi!',
            'success'
          )
    }
 
    else {
        Swal({
            type: 'error',
            title: 'Oops...',
            text: 'Username dan Password yang anda masukkan salah!',
            footer: '<a href="https://accounts.google.com/RecoverAccount?hl=in" style="text-decoration: none;" target="_blank">Lupa akun?</a>'
          });
    }

}





