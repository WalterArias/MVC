var listarArticulo = function() {  
  $.ajax({
    url: 'http://localhost/mvc/login/listarArticulos', 
    dataType : 'json',
    data:{},   
    success: function(data){
      console.log(data);
      let html='';
      for (var i = 0; i < data.length; i++) {
        html+=
        '<div class="product-box">'+
         /*  '<a href="producto.php?p='+data[i].codpro+'">'+
            '<div class="product">'+
              '<img src="assets/products/'+data.data[i].rutimapro+'">'+ */
              '<div class="detail-title">'+data[i].descripcion+'</div>'+
              '<div class="detail-description">'+data[i].costo+'</div>'+
              '<div class="detail-price">'+(data[i].precio)+'</div>'+ 
            '</div>'+
          '</a>'+
        '</div>';
      }
      document.getElementById("space-list").innerHTML=html;
    },        
  
    error: function(){
      console.log('no hay info');
    }
})
};



$(document).ready(function () {
  listarArticulo();   
});
