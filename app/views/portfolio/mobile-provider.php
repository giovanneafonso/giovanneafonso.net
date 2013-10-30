<article id="portfolio-project">
    <header id="project-header">
        <div class="row">
            <div class="col-sm-5">
                <hgroup>
                    <h1><?=$project->title;?></h1>
                    <h4><?=$project->description;?></h4>
                </hgroup>
                
                <p>Mobile Provider reúne uma coleção de aplicativos para empresas em um
                só lugar, com uma conta só o cliente pode escolher quais aplicativos
                quer usar.</p>
                    
                <p>No momento tem apenas um aplicativo disponível, o 
                <a href="/portfolio/sigma-android">Sigma Android</a>.
                Os outros aplicativos estarão disponíveis em breve.</p>
                
                
                <div class="feature-list">
                    <h5>O que fiz:</h5>
                    
                    <ul>
                        <li> Planejamento
                        <li> Estrutura do banco de dados (MySQL)
                        <li> REST API para uso geral dos aplicativos
                        <li> Painel do Cliente (RESTful)
                    </ul>
                </div>
                
                <p>
                    <!--<a href="http://sigmaandroid.com.br">http://sigmaandroid.com.br</a>-->
                    <a href="http://mobileprovider.com.br" target="_blank" class="btn btn-primary btn-lg btn-block">
                        <span class="glyphicon glyphicon-new-window"></span>
                        Acessar Mobile Provider
                    </a>
                </p>
            </div>
            <div class="col-sm-7">
                <!--<img src="<?=$project->thumbnail;?>" class="thumbnail" style="width:100%;">-->
                <img src="/static/img/portfolio/mobile-provider/project-profile.png" style="width:100%;">
            </div>
        </div>
    </header>
    
    <section class="page-grey">
        <div class="row">
            <div class="col-sm-4">
                <h2>Site principal</h2>
                <p>
                    As informações do site estão todas centralizadas nesta landing page. Acessando-a é possível saber
                    tudo o que é necessário para começar.
                </p>
            </div>
            <div class="col-sm-8">
                <img src="http://i.imgur.com/tDciCOr.png" class="thumbnail">
            </div>
        </div>
        
        <div class="separator"></div>
        
        <div class="row">
            <div class="col-sm-4 col-sm-push-8">
                <h2>Painel Administrativo</h2>
                <p>
                    Aqui é onde o cliente pode escolher quais aplicativos usar, gerenciar seus usuários, efetuar pagamentos,
                    obter suporte, dentre outras funcionalidades. Este painel ainda está em desenvolvimento.
                </p>
            </div>
            <div class="col-sm-8 col-sm-pull-4">
                <img src="http://i.imgur.com/pWGtz0u.png" class="thumbnail">
            </div>
        </div>
    </section>
</article>

