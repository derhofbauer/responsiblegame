document.addEventListener("DOMContentLoaded", function(){
  var animation = bodymovin.loadAnimation({
    container: document.getElementById('bm'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'js/data.json'
  })
 
})

