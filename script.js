
let imgsObj = [
    { id: 1, url: './imgs/dia-mae1.png', categoria: 'dia-das-maes' },
    { id: 2, url: './imgs/dia-mae2.png', categoria: 'dia-das-maes' },
    { id: 2, url: './imgs/pascoa1.png', categoria: 'pascoa' },
    { id: 2, url: './imgs/festa-junina1.png', categoria: 'festa-junina' },
    { id: 2, url: './imgs/festa-junina2.png', categoria: 'festa-junina' }
  


];

let galeria = document.querySelector('.galeria');
imgsObj.forEach(function(objeto) {
   
        
        let imagem = document.createElement('img');
        imagem.src = objeto.url;
       
        galeria.appendChild(imagem);

    
});




$('.btn-filtro').click(function(){
    var index = $(this).data('index');

    $('.btn-filtro').removeClass('active');
    $(this).addClass('active');

    console.log('index:', index)
 

      
        galeria.innerHTML = ''; 
        
        imgsObj.forEach(function(objeto) {
            if (index === 'todos') {
                
                let imagem = document.createElement('img');
                imagem.src = objeto.url;
               
                galeria.appendChild(imagem);

            } else if (objeto.categoria === index) {

                let imagem = document.createElement('img');
                imagem.src = objeto.url;
               
                galeria.appendChild(imagem);
            }
        });


  })

  
  
  
  $('.galeria').on('click', 'img', function() {
    var urlimg = $(this).attr('src');

    console.log(urlimg)
    $('#img-modal').attr('src', urlimg )     

    Swal.fire({
    
    
    confirmButtonText: "Baixar",
    showCloseButton: true,
    html: `
    


    <img id="img-modal" src="${urlimg}" alt="">
    `,

    
    }).then((result) => {
        
        if (result.isConfirmed) {
        

        // Obtém o URL da imagem
        var imageUrl = this.src;

        // Realiza o download da imagem
        fetch(imageUrl)
            .then(response => response.blob())
            .then(blob => {
                
                var link = $('<a>', {
                    href: URL.createObjectURL(blob),
                    download: 'imagem' 
                });

                

               
                $('body').append(link);
                link[0].click();

                // Remove o link após o download
                link.remove();
            });

        } else if (result.isDenied) {
        Swal.fire("Changes are not saved", "", "info");
        }
    });

        
    });

  // $.ajax({
    //     url: '',
    //     type: 'post',
    //     data: { exemplo: JSON.stringify(exemplo)},
  
    //     success: function (response) {
    //       var exemplo= JSON.parse(response);
          
  
    //     }
  
    // });
  