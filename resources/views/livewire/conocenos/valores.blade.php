<div>
    <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
    <div id="page-wrapper">
        <br><br><br><br><br><br><br><br><br>
        <!-- Header -->
        <header id="header">
            <h1><a href="index.html">SUTUTSLRC</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Conocenos</a>
                        <ul>
                            <li><a href="{{ route('conocenos.mision') }}">Misión</a></li>
                            <li><a href="{{ route('conocenos.vision') }}">Visión</a></li>
                            <li><a href="{{ route('conocenos.valores') }}">Valores</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('login') }}" class="button">Iniciar sesión</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="container">
            <header>
                <h2>Valores</h2>
            </header>
            <div class="box">
                <p>l. Nos regiremos por los principios de la Democracia e Independencia Sindical. Consideramos que solo
                    es posible la vida de los sindicatos, si los mismos se fundan en los derechos y en las libertades
                    que provienen de la espontánea asociación de sus miembros y en la autodeterminación de las
                    decisiones adoptadas por la voluntad mayoritaria de sus agremiados.</p>
                <p>ll. Entendemos por Democracia Sindical, la participación activa de todos sus miembros, en los
                    planteamientos, argumentaciones y pugnas que lleve a cabo el organismo sindical en los distintos
                    ámbitos de la realidad social, teniendo como limites los que la misma base de sus miembros en cada
                    caso establezca, tratando de evitar siempre las decisiones unilaterales, caprichosas y arbitrarias
                    que tengan como finalidad única y exclusiva la adopción de una decisión que solo traiga beneficios y
                    privilegios personalistas o de una minoría.</p>
                <p>lll. Entendemos por independencia sindical, la capacidad autónoma de fijarnos como grupo, nuestros
                    objetivos y metas y las acciones para alcanzarnos; nuestra independencia orgánica, institucional,
                    funcional, política e ideológica frente a las distintas estructuras reales de poder como son: las
                    autoridades de la Universidad Tecnológica de San Luis Río Colorado, el poder público, los partidos,
                    políticos, los poderes religiosos y las centrales, federaciones y confederaciones que persigan
                    propósitos de mediatización, control y dominio de diferente tipo.</p>
                <p>lV. Nos identificamos plenamente con las causas justas y reivindicaciones de los docentes y
                    administrativos, nos solidarizamos en los planteamientos y en la búsqueda de resoluciones para los
                    problemas de cualquier índole que afecten a estos sectores; y afirmamos nuestro propósito
                    inquebrantable de contribuir, sin limitación alguna, al logro de la unidad de los trabajadores de la
                    Universidad Tecnológica de San Luis Río Colorado.</p>
                <p>V. Reconocemos como nuestra obligación y derecho el velar y exigir por todos los medios que sean
                    posibles, el progreso técnico, el avance científico, la proyección humanista y la superación
                    académica de la Universidad Tecnológica de San Luis Río Colorado; conducto invariable que debemos
                    seguir todos los integrantes de la comunidad de la universidad.</p>
                <p>Vl. Somos partidarios de las posturas criticas y activas que conlleven directamente a la aceleracion
                    del movimiento y a la produccion del cambio social.</p>
                <div class="row">
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <!-- <ul class="icons">
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                </ul> -->
            <ul class="copyright">
                <li>&copy; Sindicato Único de Trabajadores de la Universidad Tecnológica de San Luis Río Colorado. All
                    rights reserved.</li>
            </ul>
        </footer>

    </div>
</div>
