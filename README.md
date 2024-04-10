<h1>UPLOAD de arquivos usando HTML e PHP</h1>
<p>Pesquise como fazer o upload de um arquivo utilizando HTML e PHP.

Comece por aqui http://php.net/manual/pt_BR/features.file-upload.post-method.php</p>
<h3>Requisitos</h3>
<p>a) acesse o arquivo php.ini (acessível através do botão "config" do Apache no XAMPP) e liste os valores definidos para file_uploads, upload_max_filesize, upload_tmp_dir, post_max_size, max_input_time

b) para que servem as funções is_uploaded_file() e move_uploaded_file()

c) Para que serve a tag <input type="hidden">?

d) Como filtrar as extensões de arquivos que serão aceitas para upload no programa PHP?

Escreva o código HTML para fazer o upload de:

a) um arquivo de imagem (extensões jpg, png, bmp) 

b) um arquivo PDF 

O programa PHP que recebe os arquivos após o upload deve:

a) exibir a imagem contida no arquivo (tag <img>).

b) criar um link para o arquivo PDF (tag <a href...>).

Atenção: ao usar a função move_uploaded_file() a pasta para onde o arquivo será movido já deve existir.</p>
