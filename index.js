document.querySelector('#comments_container form button')
    .addEventListener('click', function(event) {
        event.preventDefault()

        let hasError = false
        const regexInput = /^[\S]{1,50}$/
        const inputVerif = function() {
            if (this.value.match(regexInput) == null) {
                this.classList.add('error')
                this.previousElementSibling.classList.add('error')
                hasError = true
            } else {
                this.classList.remove('error')
                this.previousElementSibling.classList.remove('error')
                hasError = false
            }
        }


        //Verifie si je mets les bonnes valeurs dans mes champs 
        let firstNameInput = document.getElementById('firstname')
        if (firstNameInput.value.match(regexInput) == null) {
            firstNameInput.classList.add('error')
            firstNameInput.previousElementSibling.classList.add('error')
            hasError = true
        }
        firstNameInput.addEventListener('input', inputVerif)


        let lastNameInput = document.getElementById('lastname')
        if (lastNameInput.value.match(regexInput) == null) {
            lastNameInput.classList.add('error')
            lastNameInput.previousElementSibling.classList.add('error')
            hasError = true
        }
        lastNameInput.addEventListener('input', inputVerif)

        let urlInput = document.getElementById('url')
        if (urlInput.value !== '' &&
            urlInput.value.match(/^(?:http|https|ftp):\/\/[\S]{1,92}$/) ==
            null) {
            urlInput.classList.add('error')
            urlInput.previousElementSibling.classList.add('error')
            hasError = true
        }
        urlInput.addEventListener('input', function() {
            if (urlInput.value !== '' &&
                urlInput.value.match(/^(?:http|https|ftp):\/\/[\S]{1,92}$/) ==
                null) {
                urlInput.classList.add('error')
                urlInput.previousElementSibling.classList.add('error')
                hasError = true
            } else {
                urlInput.classList.remove('error')
                urlInput.previousElementSibling.classList.remove('error')
                hasError = false
            }
        })


        let messageTextarea = document.getElementById('message')
        if (messageTextarea.value == '') {
            messageTextarea.classList.add('error')
            messageTextarea.previousElementSibling.classList.add('error')
            hasError = true
        }
        messageTextarea.addEventListener('input', function() {
            if (this.value == '') {
                this.classList.add('error')
                this.previousElementSibling.classList.add('error')
                hasError = true
            } else {
                this.classList.remove('error')
                this.previousElementSibling.classList.remove('error')
                hasError = false
            }
        })

        if (!hasError) {
            document.querySelector('#comments_container form')
                .submit()
        }
    })


let i = 2;


$(document).ready(function() {
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
    radius = width / 2.5;

    var height = container.height();
    var angle = 0,
        step = (2 * Math.PI) / fields.length;
    fields.each(function() {
        var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
        var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
        if (window.console) {
            console.log($(this).text(), x, y);
        }

        $(this).css({
            left: x + 'px',
            top: y + 'px'
        });
        angle += step;
    });


    $('.itemDot').click(function() {

        var dataTab = $(this).data("tab");
        $('.itemDot').removeClass('active');
        $(this).addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + dataTab).addClass('active');
        i = dataTab;

        $('.dotCircle').css({
            "transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
            "transition": "2s"
        });
        $('.itemDot').css({
            "transform": "rotate(" + ((i - 1) * 36) + "deg)",
            "transition": "1s"
        });


    });

    setInterval(function() {
        var dataTab = $('.itemDot.active').data("tab");
        if (dataTab > 6 || i > 6) {
            dataTab = 1;
            i = 1;
        }
        $('.itemDot').removeClass('active');
        $('[data-tab="' + i + '"]').addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + i).addClass('active');
        i++;


        $('.dotCircle').css({
            "transform": "rotate(" + (360 - (i - 2) * 36) + "deg)",
            "transition": "2s"
        });
        $('.itemDot').css({
            "transform": "rotate(" + ((i - 2) * 36) + "deg)",
            "transition": "1s"
        });

    }, 5000);

});

