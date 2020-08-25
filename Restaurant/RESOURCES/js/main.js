/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

const parallax=document.getElementById("parallax");
window.addEventListener("scroll",function (){
    let offset=window.pageYOffset;
    parallax.style.backgroundPositionY= offset * 0.1 + "px";
})
