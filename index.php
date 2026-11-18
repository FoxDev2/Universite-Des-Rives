<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

<main>
    <section class="mx-auto grid max-w-7xl gap-10 px-5 pb-16 pt-12 md:grid-cols-12 md:items-center md:gap-8 md:pb-20 md:pt-16 lg:px-8">
        <div class="rise-in md:col-span-6 lg:col-span-5">
            <p class="mb-5 text-xs font-bold uppercase tracking-[0.18em] text-emerald-800">Université des Rives · Depuis 1974</p>
            <h1 class="max-w-xl font-serif text-5xl leading-[1.05] text-emerald-950 sm:text-6xl">Le savoir prend racine. <span class="text-emerald-700">L’avenir s’ouvre.</span></h1>
            <p class="mt-6 max-w-lg text-lg leading-8 text-slate-600">À la rencontre des idées et des territoires, nous formons celles et ceux qui feront avancer le monde de demain.</p>
            <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3">
                <a href="inscription.php" class="inline-flex min-h-12 items-center justify-center rounded-sm bg-orange-700 px-6 text-sm font-semibold text-white transition-colors hover:bg-orange-800">Déposer ma candidature</a>
                <a href="#formations" class="text-sm font-semibold text-emerald-950 underline decoration-emerald-300 underline-offset-4 hover:decoration-emerald-800">Explorer les formations</a>
            </div>
            <p class="mt-8 border-l-2 border-orange-600 pl-4 text-sm text-slate-600">Candidatures ouvertes pour la rentrée 2026–2027</p>
        </div>
        <div class="rise-in rise-in-delay relative md:col-span-6 md:col-start-7 lg:col-span-7">
            <img
                class="aspect-[4/3] w-full object-cover"
                src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1500&q=85"
                alt="Bâtiment universitaire contemporain entouré d’arbres"
                fetchpriority="high" />
            <div class="absolute bottom-4 left-4 max-w-xs bg-white p-4 shadow-lg sm:bottom-7 sm:left-7 sm:p-5">
                <p class="font-serif text-lg text-emerald-950">Un campus au bord du fleuve</p>
                <p class="mt-1 text-sm text-slate-600">Un lieu de rencontres, d’expériences et de découvertes.</p>
            </div>
        </div>
    </section>

    <section class="border-y border-slate-200 bg-stone-50" aria-label="L'université en chiffres">
        <div class="mx-auto grid max-w-7xl grid-cols-2 gap-y-7 px-5 py-8 sm:grid-cols-4 lg:px-8">
            <div>
                <p class="font-serif text-3xl text-emerald-950">12 400</p>
                <p class="mt-1 text-sm text-slate-600">étudiants</p>
            </div>
            <div>
                <p class="font-serif text-3xl text-emerald-950">38</p>
                <p class="mt-1 text-sm text-slate-600">formations</p>
            </div>
            <div>
                <p class="font-serif text-3xl text-emerald-950">74</p>
                <p class="mt-1 text-sm text-slate-600">laboratoires</p>
            </div>
            <div>
                <p class="font-serif text-3xl text-emerald-950">42</p>
                <p class="mt-1 text-sm text-slate-600">pays partenaires</p>
            </div>
        </div>
    </section>

    <section id="formations" class="mx-auto max-w-7xl px-5 py-16 md:py-20 lg:px-8">
        <div class="flex flex-col justify-between gap-4 border-b border-slate-200 pb-6 sm:flex-row sm:items-end">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-700">Choisir sa voie</p>
                <h2 class="mt-2 font-serif text-3xl text-emerald-950 sm:text-4xl">Des idées aux métiers</h2>
            </div>
            <p class="max-w-md text-sm leading-6 text-slate-600">Des parcours exigeants et ouverts, nourris par la recherche et ancrés dans les enjeux de notre époque.</p>
        </div>
        <div class="mt-2 grid md:grid-cols-2">
            <a href="inscription.php" class="group flex items-center justify-between border-b border-slate-200 py-6 md:mr-8">
                <span><span class="block text-xs font-semibold uppercase tracking-widest text-slate-500">01</span><span class="mt-1 block font-serif text-xl text-emerald-950 group-hover:text-emerald-700">Sciences &amp; environnement</span></span>
                <span class="text-2xl text-orange-700" aria-hidden="true">↗</span>
            </a>
            <a href="inscription.php" class="group flex items-center justify-between border-b border-slate-200 py-6">
                <span><span class="block text-xs font-semibold uppercase tracking-widest text-slate-500">02</span><span class="mt-1 block font-serif text-xl text-emerald-950 group-hover:text-emerald-700">Droit &amp; société</span></span>
                <span class="text-2xl text-orange-700" aria-hidden="true">↗</span>
            </a>
            <a href="inscription.php" class="group flex items-center justify-between border-b border-slate-200 py-6 md:mr-8">
                <span><span class="block text-xs font-semibold uppercase tracking-widest text-slate-500">03</span><span class="mt-1 block font-serif text-xl text-emerald-950 group-hover:text-emerald-700">Économie &amp; innovation</span></span>
                <span class="text-2xl text-orange-700" aria-hidden="true">↗</span>
            </a>
            <a href="inscription.php" class="group flex items-center justify-between border-b border-slate-200 py-6">
                <span><span class="block text-xs font-semibold uppercase tracking-widest text-slate-500">04</span><span class="mt-1 block font-serif text-xl text-emerald-950 group-hover:text-emerald-700">Arts, langues &amp; cultures</span></span>
                <span class="text-2xl text-orange-700" aria-hidden="true">↗</span>
            </a>
        </div>
    </section>

    <section id="campus" class="bg-emerald-950 text-white">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 py-14 md:grid-cols-2 md:items-center md:py-16 lg:px-8">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-lime-300">Étudier autrement</p>
                <h2 class="mt-3 max-w-lg font-serif text-3xl leading-tight sm:text-4xl">Un campus vivant, à la mesure de vos ambitions.</h2>
            </div>
            <div class="md:pl-10">
                <p class="leading-7 text-emerald-100">Bibliothèques ouvertes tard, ateliers associatifs, espaces de recherche et berges accessibles à pied : ici, la vie étudiante fait partie du parcours.</p>
                <a href="connexion.php" class="mt-5 inline-block text-sm font-semibold text-lime-300 underline decoration-lime-700 underline-offset-4 hover:decoration-lime-300">Accéder au portail étudiant</a>
            </div>
        </div>
    </section>

    <section id="admissions" class="mx-auto flex max-w-7xl flex-col gap-6 px-5 py-14 sm:flex-row sm:items-center sm:justify-between md:py-16 lg:px-8">
        <div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-orange-700">Rentrée 2026–2027</p>
            <h2 class="mt-2 font-serif text-3xl text-emerald-950">Votre prochaine étape commence ici.</h2>
        </div>
        <a href="inscription.php" class="inline-flex min-h-12 items-center justify-center self-start rounded-sm bg-orange-700 px-6 text-sm font-semibold text-white transition-colors hover:bg-orange-800 sm:self-auto">Commencer mon inscription</a>
    </section>
</main>

<?php include 'includes/footer.php'; ?>