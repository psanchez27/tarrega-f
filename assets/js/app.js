const adminBar = document.getElementById('wpadminbar')
const fixedHeader = document.querySelector('.header.fixed')

// console.log(fixedHeader)
// console.log(adminBar)

//if there is an admin bar, push site down when header is fixed
if(adminBar !== null){
  fixedHeader.style.tofp = '32px'
}
