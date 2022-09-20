if (window.history.length > 0 ) {
    document.querySelector('#back').classList.replace('none', 'fixed');
    document.querySelector('#back a').addEventListener('click', function(){
        window.history.back();
    });
}
