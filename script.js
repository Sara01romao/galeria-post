
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
    
    
    confirmButtonText: `
            <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.1562 12.3066C25.1562 18.9961 19.7363 24.416 13.0469 24.416C6.35742 24.416 0.9375 18.9961 0.9375 12.3066C0.9375 5.61719 6.35742 0.197266 13.0469 0.197266C19.7363 0.197266 25.1562 5.61719 25.1562 12.3066ZM10.8984 6.64258V12.3066H7.43652C6.91406 12.3066 6.65039 12.9414 7.02148 13.3076L12.6318 18.8887C12.8613 19.1182 13.2275 19.1182 13.457 18.8887L19.0674 13.3076C19.4385 12.9365 19.1748 12.3066 18.6523 12.3066H15.1953V6.64258C15.1953 6.32031 14.9316 6.05664 14.6094 6.05664H11.4844C11.1621 6.05664 10.8984 6.32031 10.8984 6.64258Z" fill="white"/>
            </svg>

             Baixar
    `,
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
  