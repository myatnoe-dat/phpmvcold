$('.open_modal').on('click', function(){
    $('.modal').show();
    $('input[type="text"]').val('');
})

$('.open_modal_exp').on('click', function(){
    $('.modal-exp').show();
    $('input[type="text"]').val('');
})

$('.open_modal_ver').on('click', function(){
    $('.modal-ver').show();
})

$('.modal-close').on('click', function(){
    $('.modal').hide();
})

$('.modal-close-exp').on('click', function(){
    $('.modal-exp').hide();
})
$('.modal-close').on('click', function(){
    $('.modal-ver').hide();
})

const actualBtn = document.getElementById('actual-btn');
const fileChosen = document.getElementById('file-chosen');

const actualBtnExp = document.getElementById('actual-btn-exp');
const fileChosenExp = document.getElementById('file-chosen-exp');

$('.modal-ok').on('click', function(){
    if(fileChosen.value == 'undefined' || fileChosen.value == null || fileChosen.value == ''){

        $('.error-box').show();

    } else {
        $('.modal').hide();
    }

})
$('.modal-ok-exp').on('click', function(){
    if(fileChosenExp.value == 'undefined' || fileChosenExp.value == null || fileChosenExp.value == ''){

        $('.error-box').show();

    } else {
        $('.modal-exp').hide();
    }

})
$('.error-ok').on('click', function(){
    $('.error-box').hide();
})

actualBtn.addEventListener('change', function(){
  fileChosen.value = this.files[0].name
})

actualBtnExp.addEventListener('change', function(){
  fileChosenExp.value = this.files[0].name
})