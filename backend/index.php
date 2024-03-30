
<?php

include("db_config.php");

    $lista_sql= "SELECT * FROM `posts_galeria`";
    $result_list= mysqli_query($con, $lista_sql);


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;1,700&display=swap" rel="stylesheet">
      

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    
   
   <header>
      <svg width="161" height="34" viewBox="0 0 161 34" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.4913 28.7806H1.706C0.763788 28.7806 0 27.7296 0 26.433V12.3476C0 11.051 0.763788 10 1.706 10H16.4913C17.4335 10 18.1973 11.051 18.1973 12.3476V26.433C18.1973 27.7296 17.4335 28.7806 16.4913 28.7806ZM3.98066 12.7388C2.88143 12.7388 1.99033 13.9651 1.99033 15.4777C1.99033 16.9903 2.88143 18.2165 3.98066 18.2165C5.07989 18.2165 5.97098 16.9903 5.97098 15.4777C5.97098 13.9651 5.07989 12.7388 3.98066 12.7388ZM2.27466 25.6505H15.9226V20.1728L12.8122 15.8927C12.6457 15.6635 12.3756 15.6635 12.209 15.8927L7.39265 22.5204L5.41956 19.8053C5.25301 19.5761 4.98296 19.5761 4.81638 19.8053L2.27466 23.3029V25.6505Z" fill="#7066E0"/>
        <path d="M26.2463 24.4773C26.2463 28.1127 23.9883 31.0581 21.2013 31.0581C18.4143 31.0581 16.1562 28.1127 16.1562 24.4773C16.1562 20.8419 18.4143 17.8965 21.2013 17.8965C23.9883 17.8965 26.2463 20.8419 26.2463 24.4773ZM20.3062 21.3992V24.4773H18.8639C18.6462 24.4773 18.5364 24.8223 18.691 25.0213L21.0284 28.0543C21.124 28.179 21.2766 28.179 21.3722 28.0543L23.7096 25.0213C23.8642 24.8196 23.7543 24.4773 23.5367 24.4773H22.0964V21.3992C22.0964 21.224 21.9865 21.0807 21.8523 21.0807H20.5503C20.4161 21.0807 20.3062 21.224 20.3062 21.3992Z" fill="#18C06F"/>
        <path d="M29.6903 32.7273V11.7273H33.8665V14.2926H34.0554C34.241 13.8816 34.5095 13.464 34.8608 13.0398C35.2188 12.6089 35.6828 12.2509 36.2528 11.9659C36.8295 11.6742 37.5455 11.5284 38.4006 11.5284C39.5142 11.5284 40.5417 11.8201 41.483 12.4034C42.4242 12.9801 43.1766 13.8518 43.7401 15.0185C44.3035 16.1785 44.5852 17.6335 44.5852 19.3835C44.5852 21.0871 44.3101 22.5256 43.7599 23.6989C43.2164 24.8655 42.474 25.7505 41.5327 26.3537C40.598 26.9503 39.5507 27.2486 38.3906 27.2486C37.5687 27.2486 36.8693 27.1127 36.2926 26.8409C35.7225 26.5691 35.2552 26.2277 34.8906 25.8168C34.526 25.3991 34.2476 24.9782 34.0554 24.554H33.9261V32.7273H29.6903ZM33.8366 19.3636C33.8366 20.2718 33.9626 21.0639 34.2145 21.7401C34.4664 22.4162 34.831 22.9432 35.3082 23.321C35.7855 23.6922 36.3655 23.8778 37.0483 23.8778C37.7377 23.8778 38.321 23.6889 38.7983 23.3111C39.2756 22.9266 39.6368 22.3963 39.8821 21.7202C40.134 21.0374 40.2599 20.2519 40.2599 19.3636C40.2599 18.482 40.1373 17.7064 39.892 17.0369C39.6468 16.3674 39.2855 15.8437 38.8082 15.4659C38.331 15.0881 37.7443 14.8991 37.0483 14.8991C36.3589 14.8991 35.7756 15.0814 35.2983 15.446C34.8277 15.8106 34.4664 16.3277 34.2145 16.9972C33.9626 17.6667 33.8366 18.4555 33.8366 19.3636ZM54.3097 27.2983C52.7652 27.2983 51.4295 26.9702 50.3026 26.3139C49.1823 25.651 48.3172 24.7296 47.7074 23.5497C47.0975 22.3632 46.7926 20.9877 46.7926 19.4233C46.7926 17.8456 47.0975 16.4669 47.7074 15.2869C48.3172 14.1004 49.1823 13.179 50.3026 12.5227C51.4295 11.8598 52.7652 11.5284 54.3097 11.5284C55.8542 11.5284 57.1866 11.8598 58.3068 12.5227C59.4337 13.179 60.3021 14.1004 60.9119 15.2869C61.5218 16.4669 61.8267 17.8456 61.8267 19.4233C61.8267 20.9877 61.5218 22.3632 60.9119 23.5497C60.3021 24.7296 59.4337 25.651 58.3068 26.3139C57.1866 26.9702 55.8542 27.2983 54.3097 27.2983ZM54.3295 24.017C55.0322 24.017 55.6188 23.8182 56.0895 23.4205C56.5601 23.0161 56.9148 22.4659 57.1534 21.7699C57.3987 21.0739 57.5213 20.2817 57.5213 19.3935C57.5213 18.5052 57.3987 17.7131 57.1534 17.017C56.9148 16.321 56.5601 15.7708 56.0895 15.3665C55.6188 14.9621 55.0322 14.7599 54.3295 14.7599C53.6203 14.7599 53.0237 14.9621 52.5398 15.3665C52.0625 15.7708 51.7012 16.321 51.456 17.017C51.2173 17.7131 51.098 18.5052 51.098 19.3935C51.098 20.2817 51.2173 21.0739 51.456 21.7699C51.7012 22.4659 52.0625 23.0161 52.5398 23.4205C53.0237 23.8182 53.6203 24.017 54.3295 24.017ZM77.2884 16.0824L73.4105 16.321C73.3442 15.9896 73.2017 15.6913 72.983 15.4261C72.7642 15.1544 72.4759 14.9389 72.1179 14.7798C71.7666 14.6141 71.3456 14.5312 70.8551 14.5312C70.1989 14.5312 69.6454 14.6705 69.1946 14.9489C68.7438 15.2206 68.5185 15.5852 68.5185 16.0426C68.5185 16.4072 68.6643 16.7154 68.956 16.9673C69.2476 17.2192 69.7481 17.4214 70.4574 17.5739L73.2216 18.1307C74.7064 18.4356 75.8134 18.9261 76.5426 19.6023C77.2718 20.2784 77.6364 21.1667 77.6364 22.267C77.6364 23.268 77.3414 24.1463 76.7514 24.902C76.1681 25.6577 75.366 26.2476 74.3452 26.6719C73.331 27.0895 72.161 27.2983 70.8352 27.2983C68.8134 27.2983 67.2027 26.8774 66.0028 26.0355C64.8097 25.187 64.1103 24.0336 63.9048 22.5753L68.071 22.3565C68.197 22.973 68.5019 23.4437 68.9858 23.7685C69.4697 24.0866 70.0895 24.2457 70.8452 24.2457C71.5876 24.2457 72.1842 24.1032 72.6349 23.8182C73.0923 23.5265 73.3243 23.152 73.331 22.6946C73.3243 22.3101 73.1619 21.9953 72.8438 21.75C72.5256 21.4981 72.035 21.3059 71.3722 21.1733L68.7273 20.6463C67.2358 20.348 66.1255 19.831 65.3963 19.0952C64.6738 18.3594 64.3125 17.4214 64.3125 16.2812C64.3125 15.3002 64.5777 14.455 65.108 13.7457C65.6449 13.0365 66.3973 12.4896 67.3651 12.1051C68.3395 11.7206 69.4796 11.5284 70.7855 11.5284C72.7145 11.5284 74.2325 11.9361 75.3395 12.7514C76.4531 13.5668 77.1027 14.6771 77.2884 16.0824ZM88.4272 11.7273V14.9091H79.2298V11.7273H88.4272ZM81.3178 8.06818H85.5536V22.3068C85.5536 22.6979 85.6133 23.0028 85.7326 23.2216C85.8519 23.4337 86.0176 23.5829 86.2298 23.669C86.4485 23.7552 86.7004 23.7983 86.9854 23.7983C87.1843 23.7983 87.3832 23.7817 87.582 23.7486C87.7809 23.7088 87.9334 23.679 88.0394 23.6591L88.7056 26.8111C88.4935 26.8774 88.1952 26.9536 87.8107 27.0398C87.4263 27.1326 86.9589 27.1889 86.4087 27.2088C85.3879 27.2486 84.493 27.1127 83.7241 26.8011C82.9618 26.4896 82.3685 26.0057 81.9442 25.3494C81.52 24.6932 81.3112 23.8646 81.3178 22.8636V8.06818ZM99.3995 11.7273V14.9091H89.9734V11.7273H99.3995ZM92.131 27V10.6236C92.131 9.51657 92.3465 8.59848 92.7773 7.86932C93.2148 7.14015 93.8114 6.59328 94.5671 6.22869C95.3228 5.86411 96.1812 5.68182 97.1424 5.68182C97.792 5.68182 98.3853 5.73153 98.9222 5.83097C99.4658 5.9304 99.8701 6.01989 100.135 6.09943L99.3796 9.28125C99.2139 9.22822 99.0084 9.1785 98.7631 9.1321C98.5245 9.0857 98.2792 9.0625 98.0273 9.0625C97.4042 9.0625 96.9701 9.20833 96.7248 9.5C96.4795 9.78504 96.3569 10.1861 96.3569 10.7031V27H92.131ZM105.795 27.2884C104.821 27.2884 103.953 27.1193 103.19 26.7812C102.428 26.4366 101.825 25.9295 101.381 25.2599C100.943 24.5838 100.724 23.742 100.724 22.7344C100.724 21.8859 100.88 21.1733 101.192 20.5966C101.503 20.0199 101.928 19.5559 102.464 19.2045C103.001 18.8532 103.611 18.5881 104.294 18.4091C104.983 18.2301 105.706 18.1042 106.462 18.0312C107.35 17.9384 108.066 17.8523 108.609 17.7727C109.153 17.6866 109.547 17.5606 109.793 17.3949C110.038 17.2292 110.161 16.9839 110.161 16.6591V16.5994C110.161 15.9697 109.962 15.4825 109.564 15.1378C109.173 14.7931 108.616 14.6207 107.893 14.6207C107.131 14.6207 106.525 14.7898 106.074 15.1278C105.623 15.4593 105.325 15.8769 105.179 16.3807L101.261 16.0625C101.46 15.1345 101.851 14.3324 102.435 13.6562C103.018 12.9735 103.77 12.4498 104.692 12.0852C105.62 11.714 106.694 11.5284 107.913 11.5284C108.762 11.5284 109.574 11.6278 110.349 11.8267C111.132 12.0256 111.824 12.3338 112.428 12.7514C113.037 13.169 113.518 13.706 113.869 14.3622C114.221 15.0118 114.396 15.7907 114.396 16.6989V27H110.379V24.8821H110.26C110.015 25.3594 109.687 25.7803 109.276 26.1449C108.865 26.5028 108.371 26.7846 107.794 26.9901C107.217 27.1889 106.551 27.2884 105.795 27.2884ZM107.009 24.3651C107.632 24.3651 108.182 24.2424 108.659 23.9972C109.136 23.7453 109.511 23.4072 109.783 22.983C110.054 22.5587 110.19 22.0781 110.19 21.5412V19.9205C110.058 20.0066 109.875 20.0862 109.643 20.1591C109.418 20.2254 109.163 20.2884 108.878 20.348C108.593 20.401 108.308 20.4508 108.023 20.4972C107.738 20.5369 107.479 20.5734 107.247 20.6065C106.75 20.6795 106.316 20.7955 105.945 20.9545C105.573 21.1136 105.285 21.3291 105.08 21.6009C104.874 21.866 104.771 22.1974 104.771 22.5952C104.771 23.1719 104.98 23.6127 105.398 23.9176C105.822 24.2159 106.359 24.3651 107.009 24.3651ZM124.583 27.2983C123.019 27.2983 121.673 26.9669 120.546 26.304C119.426 25.6345 118.564 24.7064 117.961 23.5199C117.364 22.3333 117.066 20.9678 117.066 19.4233C117.066 17.8589 117.368 16.4867 117.971 15.3068C118.581 14.1203 119.446 13.1955 120.566 12.5327C121.686 11.8632 123.019 11.5284 124.563 11.5284C125.896 11.5284 127.062 11.7704 128.063 12.2543C129.064 12.7382 129.856 13.4176 130.44 14.2926C131.023 15.1676 131.344 16.1951 131.404 17.375H127.407C127.294 16.6127 126.996 15.9995 126.512 15.5355C126.035 15.0649 125.408 14.8295 124.633 14.8295C123.977 14.8295 123.403 15.0085 122.913 15.3665C122.429 15.7178 122.051 16.2315 121.779 16.9077C121.507 17.5838 121.371 18.4025 121.371 19.3636C121.371 20.3381 121.504 21.1667 121.769 21.8494C122.041 22.5322 122.422 23.0526 122.913 23.4105C123.403 23.7685 123.977 23.9474 124.633 23.9474C125.117 23.9474 125.551 23.848 125.935 23.6491C126.326 23.4503 126.648 23.1619 126.9 22.7841C127.158 22.3996 127.327 21.9389 127.407 21.402H131.404C131.338 22.5687 131.02 23.5961 130.45 24.4844C129.886 25.366 129.107 26.0554 128.113 26.5526C127.119 27.0497 125.942 27.2983 124.583 27.2983ZM134.116 27V11.7273H138.352V27H134.116ZM136.244 9.75852C135.614 9.75852 135.074 9.54972 134.623 9.1321C134.179 8.70786 133.957 8.20076 133.957 7.61079C133.957 7.02746 134.179 6.52699 134.623 6.10938C135.074 5.68513 135.614 5.47301 136.244 5.47301C136.874 5.47301 137.411 5.68513 137.855 6.10938C138.306 6.52699 138.531 7.02746 138.531 7.61079C138.531 8.20076 138.306 8.70786 137.855 9.1321C137.411 9.54972 136.874 9.75852 136.244 9.75852ZM145.981 6.63636V27H141.745V6.63636H145.981Z" fill="#7066E0"/>
      </svg>
        
      <div class="title-header">
        <h1>Galeria</h1>
      </div>

   </header>
     

   <div class="filtro-container-categoria">

       <div class="filtro-categoria">
          <label for="">Filtrar Categoria</label>
           <select name="" id="">
              <option value="">Selecionar</option>
              <option value="dia-das-maes">Dia das Mães</option>
              <option value="pascoa">Páscoa</option>
              <option value="festa-junina">Festa Junina</option>
           </select>
       </div>

       <button class="btn-novo">
            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 2V6.5M7 11V6.5M7 6.5H2M7 6.5H12" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            Novo
            
       </button>

   </div>

   <div class="table-container">
    <table>
       
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Imagem</th>
            <th scope="col">Categoria</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <?php
           
            while($array= mysqli_fetch_array($result_list)){

                $id= $array['id_post'];
                $categoria= $array['categoria_post'];
                $path_img= $array['path_post'];
            
          
          
          ?>

          <tr>
            <td>2</td>
            <td><img src="./<?php echo $path_img ?>" width="80" height="80" alt=""></td>
            <td><?php echo  $categoria ?></td>
            <td>
                <button class="btn-excluir-img">
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.64286 0.687504H6.96429L6.75446 0.285746C6.71002 0.199854 6.64155 0.127604 6.55677 0.0771237C6.47198 0.0266431 6.37425 -6.50539e-05 6.27455 3.76679e-06H3.72321C3.62375 -0.000364272 3.52618 0.0262443 3.4417 0.0767811C3.35721 0.127318 3.28923 0.199738 3.24554 0.285746L3.03571 0.687504H0.357143C0.262423 0.687504 0.171582 0.72372 0.104605 0.788186C0.0376274 0.852651 0 0.940085 0 1.03125L0 1.71875C0 1.80992 0.0376274 1.89736 0.104605 1.96182C0.171582 2.02629 0.262423 2.0625 0.357143 2.0625H9.64286C9.73758 2.0625 9.82842 2.02629 9.8954 1.96182C9.96237 1.89736 10 1.80992 10 1.71875V1.03125C10 0.940085 9.96237 0.852651 9.8954 0.788186C9.82842 0.72372 9.73758 0.687504 9.64286 0.687504ZM1.1875 10.0332C1.20453 10.295 1.32459 10.5407 1.52323 10.7204C1.72186 10.9 1.98415 11 2.2567 11H7.7433C8.01585 11 8.27814 10.9 8.47677 10.7204C8.67541 10.5407 8.79547 10.295 8.8125 10.0332L9.28571 2.75H0.714286L1.1875 10.0332Z" fill="white"/>
                    </svg>
                      
                    Excluir
                </button>
            </td>
          </tr>
             
          <?php } ?>



          
          
        </tbody>
       
      </table>
   </div>

   
   
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
    $(document).ready(function () {

    $('.btn-novo').on('click', function(){
        Swal.fire({
            title: "Adicionar Novo",
            html: `<div>
                        <form class="add-form" enctype="multipart/form-data">

                            <div class="campo-container">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" required>
                                    <option value="">Selecionar</option>
                                    <option value="dia-das-maes">Dia das Mães</option>
                                    <option value="pascoa">Páscoa</option>
                                </select>
                            </div>
                            <div class="file-imagem-container" id="drop-area">
                                <label for="arquivo-img">Enviar Imagem</label>
                                <input type="file" id="fileInput" required >
                            </div>
                        </form>
                    </div>`,
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Enviar",
            showCloseButton: true,

            
            preConfirm: () => {
               
                var categoria_img = $('#categoria').val();
                var arquivo_img = document.getElementById("fileInput").files[0];

                console.log(categoria_img);
                console.log(arquivo_img)

               
                var formData = new FormData();
                formData.append("categoria", categoria_img);
                formData.append("imagem", arquivo_img);

                console.log(formData.categoria)

                
                return formData;


                
               
            }
        }).then((result) => {
            if (result.isConfirmed) {

                var dataNovaImg = result.value;

                console.log("enviar", dataNovaImg)

                $.ajax({
                url: 'api.php',
                type: 'post',
                data: dataNovaImg,
                processData: false,
                contentType: false,
                success: function(response) {
                    
                    console.log(response);
                }
            });

            }
        });
    });
});

      
    </script>
</body>
</html>


