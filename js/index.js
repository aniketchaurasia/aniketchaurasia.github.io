window.onscroll = () => {
    const nav = document.querySelector('#N1');
    if (this.scrollY <= 10) nav.className = '';
    else nav.className = 'scroll';
};