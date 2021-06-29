ScrollReveal({
  duration: 500
});
ScrollReveal({
  reset: false
});
ScrollReveal().reveal('.show-1', {
  deley: 300
})
ScrollReveal().reveal('.show-2', {
  delay: 400
})
ScrollReveal().reveal('.show-3', {
  delay: 600
})
var slideUp = {
  distance: '80px',
  origin: 'bottom',
  opacity: 0
};
ScrollReveal().reveal('.show', slideUp);