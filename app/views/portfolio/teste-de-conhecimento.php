<article id="portfolio-project">
    <header id="project-header">
        <div class="row">
            <div class="col-sm-5">
                <hgroup>
                    <h1><?=$project->title;?></h1>
                    <h4><?=$project->description;?></h4>
                </hgroup>
                
                <p>Teste de conhecimento é um site onde você pode responder ou criar seus próprios testes
                de conhecimento e compartilhá-los onde quiser.</p>
                
                
                <div class="feature-list">
                    <h5>O que fiz:</h5>
                    
                    <ul>
                        <li> Layout
                        <li> Estrutura do banco de dados (MySQL)
                        <li> Painel do Cliente
                    </ul>
                </div>
                
                <p>
                    <!--<a href="http://sigmaandroid.com.br">http://sigmaandroid.com.br</a>-->
                    <a href="http://testedeconhecimento.com.br" target="_blank" class="btn btn-primary btn-lg btn-block">
                        <span class="glyphicon glyphicon-new-window"></span>
                        Acessar Teste de Conhecimento
                    </a>
                </p>
                
                <div class="alert alert-danger">
                    Atualmente o desenvolvimento encontra-se parado por tempo indeterminado
                </div>
            </div>
            <div class="col-sm-7">
                <!--<img src="<?=$project->thumbnail;?>" class="thumbnail" style="width:100%;">-->
                <img src="/static/img/portfolio/teste-de-conhecimento/project-profile.png" style="width:100%;">
            </div>
        </div>
    </header>
    
    <section class="page-grey">
        <div class="row">
            <div class="col-sm-4">
                <h2>Site principal</h2>
                <p>
                    Na página inicial você tem uma visão geral do que pode ser feito.
                    Pode ver os testes marcados como "públicos" e também se cadastrar
                    para criar seu próprio teste e divulgá-lo.
                </p>
            </div>
            <div class="col-sm-8">
                <img src="http://i.imgur.com/qCfb4Tf.png" class="thumbnail">
            </div>
        </div>
        
        <div class="separator"></div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-push-8">
                <h2>Criação de teste</h2>
                <p>
                    A criação de um novo teste é simples e bem sugestiva. Você cria e edita
                    as perguntas, respostas, e informações do teste.
                </p>
            </div>
            <div class="col-sm-8 col-sm-pull-4">
                <img src="http://i.imgur.com/u3nVxG5.png" class="thumbnail">
            </div>
        </div>
    </section>
</article>
