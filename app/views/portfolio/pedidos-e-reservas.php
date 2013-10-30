<article id="portfolio-project">
    <header id="project-header">
        <div class="row">
            <div class="col-sm-5">
                <hgroup>
                    <h1><?=$project->title;?></h1>
                    <h4><?=$project->description;?></h4>
                </hgroup>
                
                <p>Site onde você se cadastra e recebe um link só seu. Você compartilha
                seu link com quem quiser e você recebe uma mensagem SMS no seu celular
                cada vez que alguém preencher seu formulário, é como permitir que mandem
                SMS's gratuitos para o seu celular.</p>
                
                
                <div class="feature-list">
                    <h5>O que fiz:</h5>
                    
                    <ul>
                        <li> Layout
                        <li> Estrutura do banco de dados (MySQL)
                        <li> Painel do Cliente
                        <li> Sistema de pagamentos através do MoIP
                    </ul>
                </div>
                
                <p>
                    <!--<a href="http://sigmaandroid.com.br">http://sigmaandroid.com.br</a>-->
                    <div class="alert alert-danger">
                        Este aplicativo foi cancelado e saiu do ar.
                    </div>
                </p>
            </div>
            <div class="col-sm-7">
                <!--<img src="<?=$project->thumbnail;?>" class="thumbnail" style="width:100%;">-->
                <img src="/static/img/portfolio/<?=$project->id;?>/project-profile.png" style="width:100%;">
            </div>
        </div>
    </header>
</article>
