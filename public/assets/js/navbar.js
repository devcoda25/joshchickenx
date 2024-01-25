document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('#navbar-nav .nav-link');
    let activeLink = navLinks[0]; // Set the first link as the initial active link

    navLinks.forEach(link => link.addEventListener('click', e => {
        navLinks.forEach(link => link.classList.remove('active-link'));
        e.target.classList.add('active-link');
        activeLink = e.target; // Update the active link variable
    }));

    // Add a mutation observer to handle navigation changes
    const observer = new MutationObserver(mutations => {
        mutations.forEach(mutation => {
            if (mutation.attributeName === 'class' && mutation.target.classList.contains('active')) {
                navLinks.forEach(link => link.classList.remove('active-link'));
                activeLink = mutation.target; // Update the active link variable
                activeLink.classList.add('active-link');
            }
        });
    });

    observer.observe(document.body, { attributes: true, childList: false, subtree: false });
});