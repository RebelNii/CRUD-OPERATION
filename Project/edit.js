

btn = document.querySelector(".btnedit")



btn.addEventListener("click",(e)=>{
   let textvalue = displayData(e);


   id = $("input[name*='id']")
   bookname = $("input[name*='book_name']")
   bookpublisher = $("input[name*='book_publisher']")
   bookprice = $("input[name*='price']")

   id.val(textvalue[0])
   bookname.val(textvalue[1])
   bookpublisher.val(textvalue[2])
   bookprice.val(textvalue[3])

   //console.log(textvalue)
   //displayData(e)
})





function displayData(e){
    let id = 0;
    
    const td = $("#tbody tr td")
    let textvalue = [];
    
    for(const value of td){

        if(value.dataset.id == e.target.dataset.id){
            //console.log(e.target.dataset.id)
            textvalue[id++] = value.textContent
            //console.log(value.textContent)
        }
        
    }
  return textvalue
}


