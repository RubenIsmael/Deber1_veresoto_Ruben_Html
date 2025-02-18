<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APRENDE CSS DEBER CLASE 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <div class="personalizacion">
        <select id="colorTema" onchange="cambiarColor(this.value)">
            <option value="default">Color Principal-Predeterminado</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="purple">Púrpura</option>
            <option value="red">Rojo</option>
        </select>

        <select id="colorTexto" onchange="cambiarColorTexto(this.value)">
            <option value="default">Color Texto Tabla-Predeterminado</option>
            <option value="black">Negro</option>
            <option value="gray">Gris</option>
            <option value="brown">Marrón</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="purple">Púrpura</option>
            <option value="red">Rojo</option>
        </select>

        <select id="idioma" onchange="cambiarIdioma(this.value)">
            <option value="default">Idioma-Predeterminado</option>
            <option value="es">Español</option>
            <option value="en">English</option>
            <option value="fr">Français</option>
        </select>

        <select id="tema" onchange="cambiarTema(this.value)">
            <option value="default">Tema-Predeterminado</option>
            <option value="light">Tema Claro</option>
            <option value="dark">Tema Oscuro</option>
        </select>

        <select id="fuente" onchange="cambiarFuente(this.value)">
            <option value="default">Estilo letra-Predeterminado</option>
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Georgia">Georgia</option>
        </select>
    </div>

    <header>
        <nav>
            <ul>
                <li><a href="#" data-lang="nav-inicio">Inicio</a></li>
                <li><a href="#" data-lang="nav-productos">Productos</a></li>
                <li><a href="#" data-lang="nav-servicios">Servicios</a></li>
                <li><a href="#" data-lang="nav-contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="galeria">
            <h2 data-lang="galeria-titulo">Nuestra Galería</h2>
            <div class="contenedor-imagenes">
                <div class="imagen-card">
                    <img src="imag/imagen_1.jpg" alt="Imagen 1">
                    <h3 data-lang="imagen-1">AL NATURAL</h3>
                </div>
                <div class="imagen-card">
                    <img src="imag/imagen_2.jpg" alt="Imagen 2">
                    <h3 data-lang="imagen-2">LA MIRADA</h3>
                </div>
                <div class="imagen-card">
                    <img src="imag/imagen_3.jpg" alt="Imagen 3">
                    <h3 data-lang="imagen-3">RELAJACIÓN</h3>
                </div>
                <div class="imagen-card">
                    <img src="imag/imagen_4.jpg" alt="Imagen 4">
                    <h3 data-lang="imagen-4">PRIMAVERA</h3>
                </div>
                <div class="imagen-card">
                    <img src="imag/imagen_5.jpg" alt="Imagen 5">
                    <h3 data-lang="imagen-5">EN LA TOSCANA</h3>
                </div>
            </div>
        </section>

        <section class="tabla-contenido">
            <h2 data-lang="tabla-titulo">Información Importante</h2>
            <table>
                <thead>
                    <tr>
                        <th data-lang="tabla-nombre-obra">NOMBRE DE LA OBRA</th>
                        <th data-lang="tabla-autor">AUTOR</th>
                        <th data-lang="tabla-costo">COSTO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-lang="tabla-dato-1">Al natural</td>
                        <td data-lang="tabla-dato-2">Carlos Ruiz</td>
                        <td data-lang="tabla-dato-3">10$</td>
                    </tr>
                    <tr>
                        <td data-lang="tabla-dato-4">La mirada</td>
                        <td data-lang="tabla-dato-5">Alberto Freile</td>
                        <td data-lang="tabla-dato-6">8$</td>
                        <tr>
                        <td data-lang="tabla-dato-1">Relajación/td>
                        <td data-lang="tabla-dato-2">María Pinto</td>
                        <td data-lang="tabla-dato-3">12$</td>
                    </tr>
                    <tr>
                        <td data-lang="tabla-dato-4">Primavera/td>
                        <td data-lang="tabla-dato-5">Leonardo Cando</td>
                        <td data-lang="tabla-dato-6">10$</td>
                    </tr>
                    <tr>
                        <td data-lang="tabla-dato-4">En la Toscana</td>
                        <td data-lang="tabla-dato-5">Joaquín Lausury</td>
                        <td data-lang="tabla-dato-6">15$</td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p data-lang="footer-texto">© 2025 - Todos los derechos reservados</p>
    </footer>

    <script>
        const traducciones = {
            'es': {
                'nav-inicio': 'Inicio',
                'nav-productos': 'Productos',
                'nav-servicios': 'Servicios',
                'nav-contacto': 'Contacto',
                'galeria-titulo': 'Nuestra Galería',
                'tabla-titulo': 'Información Importante',
                'tabla-nombre-obra': 'NOMBRE DE LA OBRA',
                'tabla-autor': 'AUTOR',
                'tabla-costo': 'COSTO',
                'footer-texto': '© 2025 - Todos los derechos reservados'
            },
            'en': {
                'nav-inicio': 'Home',
                'nav-productos': 'Products',
                'nav-servicios': 'Services',
                'nav-contacto': 'Contact',
                'galeria-titulo': 'Our Gallery',
                'tabla-titulo': 'Important Information',
                'tabla-nombre-obra': 'NAME OF THE WORK',
                'tabla-autor': 'AUTHOR',
                'tabla-costo': 'COST',
                'footer-texto': '© 2025 - All rights reserved'
            },
            'fr': {
                'nav-inicio': 'Accueil',
                'nav-productos': 'Produits',
                'nav-servicios': 'Services',
                'nav-contacto': 'Contact',
                'galeria-titulo': 'Notre Galerie',
                'tabla-titulo': 'Informations Importantes',
                'tabla-nombre-obra': 'NOM DE L’ŒUVRE',
                'tabla-autor': 'AUTEUR',
                'tabla-costo': 'COÛT',
                'footer-texto': '© 2025 - Tous droits réservés'
            }
        };

        function cambiarColor(color) {
            document.body.style.backgroundColor = color === 'default' ? '' : color;
        }

        function cambiarColorTexto(color) {
            document.body.style.color = color === 'default' ? '' : color;
        }

        function cambiarIdioma(idioma) {
            const elementos = document.querySelectorAll('[data-lang]');
            elementos.forEach(elemento => {
                const clave = elemento.getAttribute('data-lang');
                if (traducciones[idioma][clave]) {
                    elemento.textContent = traducciones[idioma][clave];
                }
            });
        }

        function cambiarTema(tema) {
            document.documentElement.setAttribute('data-theme', tema);
        }

        function cambiarFuente(fuente) {
            document.body.style.fontFamily = fuente === 'default' ? '' : fuente;
        }
    </script>
</body>
</html>
