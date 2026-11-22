
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ola Shop | Achetez mieux, vivez mieux</title>

    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Barre supérieure -->
    <div class="topbar">
        <p>✦ Livraison partout au Bénin</p>
        <p>✦ Qualité et confiance</p>
        <p>✦ Service client disponible</p>
    </div>

    <!-- En-tête -->
    <header class="header">
        <a href="/" class="logo">
            <span>OLA</span> SHOP
            <small>Achetez mieux, vivez mieux !</small>
        </a>

        <nav class="navigation">
            <a href="/" class="active">Accueil</a>
            <a href="#boutique">Boutique</a>
            <a href="#categories">Catégories</a>
            <a href="#apropos">À propos</a>
            <a href="#contact">Contact</a>
        </nav>

        <a href="#contact" class="cart">
            🛒 Panier <span>0</span>
        </a>
    </header>

    <!-- Bannière principale -->
    <main>
        <section class="hero">

            <div class="hero-content">
                <span class="welcome">BIENVENUE CHEZ OLA SHOP</span>

                <h1>
                    Découvrez notre
                    <span>boutique en ligne</span>
                </h1>

                <p>
                    Des produits de qualité, des prix intéressants
                    et un service pensé pour vous.
                </p>

                <a href="#boutique" class="btn-gold">
                    Découvrir nos produits →
                </a>
            </div>

            <div class="hero-decoration">
                <div class="gold-circle"></div>
                <span class="shopping-icon">✦</span>
                <p>OLA SHOP</p>
                <small>SHOP WITH ELEGANCE</small>
            </div>

        </section>

        <!-- Services -->
        <section class="services">
            <div>
                <span>✧</span>
                <h3>Qualité garantie</h3>
                <p>Des produits sélectionnés</p>
            </div>

            <div>
                <span>➤</span>
                <h3>Livraison rapide</h3>
                <p>Partout au Bénin</p>
            </div>

            <div>
                <span>♢</span>
                <h3>Commande simple</h3>
                <p>En quelques clics</p>
            </div>

            <div>
                <span>☎</span>
                <h3>Service client</h3>
                <p>À votre écoute</p>
            </div>
        </section>

        <!-- Catégories -->
        <section class="section" id="categories">
            <h2>Nos catégories</h2>
            <p class="section-description">
                Découvrez nos différentes collections.
            </p>

            <div class="categories">
                <div class="category-card">
                    <span>01</span>
                    <h3>Mode & vêtements</h3>
                </div>

                <div class="category-card">
                    <span>02</span>
                    <h3>Chaussures</h3>
                </div>

                <div class="category-card">
                    <span>03</span>
                    <h3>Accessoires</h3>
                </div>

                <div class="category-card">
                    <span>04</span>
                    <h3>Électronique</h3>
                </div>
            </div>
        </section>

        <!-- Produits -->
       </h3>
                        <p>À découvrir prochainement</p>
                        <span class="price">Prix à définir</span>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">OLA</div>
                    <div class="product-info">
                        <h3>Produit populaire</h3>
                        <p>À découvrir prochainement</p>
                        <span class="price">Prix à définir</span>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">OLA</div>
                    <div class="product-info">
                        <h3>Nouveauté</h3>
                        <p>À découvrir prochainement</p>
                        <span class="price">Prix à définir</span>
                    </div>
                </article>
            </div>
        </section>

    </main>
    
    <section class="section" id="boutique">
            <h2>Nos produits populaires</h2>
            <p class="section-description">
                Retrouvez les articles appréciés par nos clients.
            </p>

            <div class="products">
                <article class="product-card">
                    <div class="product-image">OLA</div>
                    <div class="product-info">
                        <h3>Produit tendance

<section class="section" id="boutique">

    <h2>Nos produits populaires</h2>

    <p class="section-description">
        Retrouvez les articles appréciés par nos clients.
    </p>

    <div class="products">

        <!-- Produit 1 -->
        <article class="product-card">
            
<div class="product-image">
    <img src="{{ asset('images/armoir.png') }}" alt="Armoire">
</div>

<div class="product-image">
    <img src="{{ asset('images/ecouteur.png') }}" alt="Écouteurs">
</div>

<div class="product-image">
    <img src="{{ asset('images/gourde.png') }}" alt="Gourde">
</div>

            <div class="product-info">
                <h3>Produit tendance</h3>
                <p>Un article sélectionné pour vous.</p>
                <p class="price">Prix à définir</p>
                <button type="button">Ajouter au panier</button>
            </div>
        </article>

        <!-- Produit 2 -->
        <article class="product-card">
            <div class="product-image">OLA SHOP</div>
            <div class="product-info">
                <h3>Nouvel arrivage</h3>
                <p>Découvrez nos nouveautés.</p>
                <p class="price">Prix à définir</p>
                <button type="button">Ajouter au panier</button>
            </div>
        </article>

        <!-- Produit 3 -->
        <article class="product-card">
            <div class="product-image">OLA SHOP</div>
            <div class="product-info">
                <h3>Meilleure vente</h3>
                <p>Un article à découvrir absolument.</p>
                <p class="price">Prix à définir</p>
                <button type="button">Ajouter au panier</button>
            </div>
        </article>

    </div>

</section>


    <!-- Pied de page -->
    <footer id="contact">
        <h2>OLA SHOP</h2>
        <p>Achetez mieux, vivez mieux !</p>
        <p>© 2026 Ola Shop. Tous droits réservés.</p>
    </footer>
    <script src="{{ asset('js/ola-shop.js') }}" defer></script>

</body>
</html>
