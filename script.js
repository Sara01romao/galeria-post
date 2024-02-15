
$('#btn-todos').click(function(){
 
    var acaoFiltro = "todos";
  
    // $.ajax({
    //     url: '',
    //     type: 'post',
    //     data: { exemplo: JSON.stringify(exemplo)},
  
    //     success: function (response) {
    //       var exemplo= JSON.parse(response);
          
          
  
          
    
  
    //     }
  
    // });
  
      console.log("todos")
  })
  
  
  $('.galeria img').on('click', function() {
    var urlimg = $(this).attr('src');

    console.log(urlimg)
    $('#img').attr('src', urlimg )     

    Swal.fire({
    
    
    confirmButtonText: "Baixar",
    showCloseButton: true,
    html: `
    


    <img id="img" src="${urlimg}" alt="">
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
  