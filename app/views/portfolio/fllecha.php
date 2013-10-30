<article id="portfolio-project">
    <header id="project-header">
        <div class="row">
            <div class="col-sm-5">
                <hgroup>
                    <h1><?=$project->title;?></h1>
                    <h4><?=$project->description;?></h4>
                </hgroup>
                
                <p>Aplicativo para você cadastrar seus contatos e enviar SMS's pela web com facilidade.</p>
                
                
                <div class="feature-list">
                    <h5>O que fiz:</h5>
                    
                    <ul>
                        <li> Planejamento
                        <li> Estrutura do banco de dados (MySQL)
                        <li> Painel do Cliente
                        <li> Painel interno de administradores
                        <li> Tarefas agendadas
                        <li> Sistema de pagamentos através do MoIP
                    </ul>
                </div>
                
                <p>
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

