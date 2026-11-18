<?php
$connexion_non_disponible = $_SERVER['REQUEST_METHOD'] === 'POST';
include 'includes/head.php';
include 'includes/navbar.php'
?>

<main class="mx-auto grid min-h-[calc(100vh-149px)] max-w-7xl md:grid-cols-2">
    <section class="flex items-center px-5 py-12 sm:px-10 lg:px-16">
      <div class="mx-auto w-full max-w-md">
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-700">Espace étudiant</p>
        <h1 class="mt-3 font-serif text-4xl text-emerald-950">Heureux de vous retrouver.</h1>
        <p class="mt-3 leading-6 text-slate-600">Connectez-vous pour accéder à votre espace étudiant.</p>

        <?php if ($connexion_non_disponible) : ?>
          <div class="mt-6 border-l-4 border-orange-600 bg-orange-50 px-4 py-3 text-sm text-orange-950" role="status">
            Le service d’authentification n’est pas encore connecté.
          </div>
        <?php endif; ?>

        <form class="mt-8 space-y-5" method="post" action="connexion.php">
          <div>
            <label for="email" class="mb-1.5 block text-sm font-semibold text-slate-800">Adresse e-mail étudiante</label>
            <input id="email" name="email" type="email" autocomplete="username" required class="w-full rounded-sm border border-slate-300 bg-white px-3 py-3 text-slate-900 outline-none focus:border-emerald-800 focus:ring-2 focus:ring-emerald-800/20" placeholder="prenom.nom@etudiants.univ-rives.fr" />
          </div>
          <div>
            <label for="password" class="mb-1.5 block text-sm font-semibold text-slate-800">Mot de passe</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="w-full rounded-sm border border-slate-300 bg-white px-3 py-3 text-slate-900 outline-none focus:border-emerald-800 focus:ring-2 focus:ring-emerald-800/20" placeholder="Votre mot de passe" />
          </div>
          <button type="submit" class="min-h-12 w-full rounded-sm bg-emerald-950 px-5 text-sm font-semibold text-white transition-colors hover:bg-emerald-800">Se connecter</button>
        </form>

        <p class="mt-6 text-sm text-slate-600">Pas encore inscrit ? <a href="inscription.php" class="font-semibold text-emerald-900 underline decoration-emerald-300 underline-offset-4 hover:decoration-emerald-800">Déposer un dossier</a></p>
      </div>
    </section>

    <aside class="relative hidden min-h-128 md:block">
      <img class="absolute inset-0 size-full object-cover" src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1400&q=85" alt="Bâtiment universitaire contemporain entouré d’arbres" />
      <div class="absolute inset-0 bg-emerald-950/45"></div>
      <div class="absolute bottom-10 left-10 right-10 text-white lg:bottom-14 lg:left-14">
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-lime-200">Université des Rives</p>
        <p class="mt-3 max-w-md font-serif text-3xl leading-tight">Les prochaines découvertes se font ensemble.</p>
      </div>
    </aside>
  </main>

  <?php 
  include 'includes/footer.php'
  ?>