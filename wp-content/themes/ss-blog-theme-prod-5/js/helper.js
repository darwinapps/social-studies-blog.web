function search() {
  // alert('In wait')
  // Create .onclick event in the button
  document.querySelector('.cover-modal').style.display = `block`;

}

function close() {
  console.log("Hello");
  // document.querySelector('.cover-modal').style.display = `none`;
}

// console.log(jQuery('div'));

jQuery('.ufaq-faq-title-text').prepend('<p class="ufaq-faq-prefix" >Q.</p>')
jQuery('.ufaq-faq-post').prepend('<p class="ufaq-faq-prefix" >A.</p>')
jQuery('.ewd-ufaq-post-margin:not(ufaq-faq-post)').addClass('ufaq-disable-permalink')
jQuery('.ewd-ufaq-post-margin:not(ufaq-faq-post)').removeAttr('href')
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = (event) => {
//   if (event.target === document.querySelector('.cover-modal')) {
//     document.querySelector('.cover-modal').style.display = `none`;
//   }
// };




