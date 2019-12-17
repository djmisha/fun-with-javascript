 /* Loads more Media Center items on click of Load More button 6 times before it stops */
    function showMoreMedia() {
        let mediarows = $('.home__mediacentre .container .media__row');
        let loadbutton = $('.load-more-mediacentre span');
        let counter = 3;

        function scanRowsandShowHide() {
            for (let i = 0; i < mediarows.length; i++) {
                if (i >= counter) {
                    mediarows[i].classList.add('media__hidden');
                }
                else {
                    mediarows[i].classList.remove('media__hidden');
                    mediarows[i].classList.add('media__visible');
                }
            }
            counter ++;
            if (counter === 7 ) {
                loadbutton.css('display', 'none')
            }
            return counter;
        }

        scanRowsandShowHide();

        $('.load-more-mediacentre span').on('click', function(event) {
            event.preventDefault;
            scanRowsandShowHide();
        });
    };

    showMoreMedia();
