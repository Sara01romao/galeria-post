
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

      
        let botao = document.createElement('button');
        botao.textContent = 'Baixar';
        botao.classList.add('baixarImg')

        let div = document.createElement('div');
        div.classList.add('cardImg')

        div.appendChild(imagem);
        div.appendChild(botao);

       
       
        galeria.appendChild(div);

    
});

$(document).on('click', '.baixarImg', function() {
    var urlimg = $(this).prev('img').attr('src');

    console.log(urlimg);

    var link = $('<a>', {
        href: urlimg,
        download: 'imagem.jpg' // Nome do arquivo a ser baixado
    });

    $('body').append(link);
    link[0].click();

    // Remove o link após o download
    link.remove();
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

            
                let botao = document.createElement('button');
                botao.textContent = 'Baixar';
                botao.classList.add('baixarImg')

                let div = document.createElement('div');
                div.classList.add('cardImg')

                div.appendChild(imagem);
                div.appendChild(botao);
               
                galeria.appendChild(div);

            } else if (objeto.categoria === index) {

                let imagem = document.createElement('img');
                imagem.src = objeto.url;

            
                let botao = document.createElement('button');
                botao.textContent = 'Baixar';
                botao.classList.add('baixarImg')

                let div = document.createElement('div');
                div.classList.add('cardImg')

                div.appendChild(imagem);
                div.appendChild(botao);
               
               
                galeria.appendChild(div);
            }
        });


  })

  
  
  
  $('.baixarImg').on('click', function() {
    var urlimg = $(this).next(img).attr('src');

    console.log(urlimg)


    var link = $('<a>', {
        href: URL.createObjectURL(blob),
        download: 'imagem' 
    });

    

        
            $('body').append(link);
            link[0].click();

            link.remove();
  
        
    });

 
  