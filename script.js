
let imgsObj = [
    { id: 1, url: './imgs/dia-mae1.png', categoria: 'dia-das-maes', data: 'data_da_imagem_1' },
    { id: 2, url: './imgs/dia-mae2.png', categoria: 'dia-das-maes', data: 'data_da_imagem_2' },
    { id: 2, url: './imgs/pascoa1.png', categoria: 'pascoa', data: 'data_da_imagem_2' }
  


];



$('.btn-filtro').click(function(){
    var index = $(this).data('index');

    $('.btn-filtro').removeClass('active');
    $(this).addClass('active');

    console.log('index:', index)
 

      let galeria = document.querySelector('.galeria');
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
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
        

        // Obtém o URL da imagem
        var imageUrl = this.src;

        // Realiza o download da imagem
        fetch(imageUrl)
            .then(response => response.blob())
            .then(blob => {
                // Cria um link de download dinâmico usando jQuery
                var link = $('<a>', {
                    href: URL.createObjectURL(blob),
                    download: 'imagem' // Nome do arquivo a ser salvo (pode personalizar conforme necessário)
                });

                

                // Adiciona o link ao corpo do documento e simula o clique nele para iniciar o download
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
  