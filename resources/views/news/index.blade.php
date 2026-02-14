<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Nieuws"
        subtitle="Het laatste nieuws van Lijst 8 Barendrecht"
    />
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if($posts->isNotEmpty())
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts as $post)
                        <x-news-card :post="$post" />
                    @endforeach
                </div>
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <p class="text-center text-white/70 text-lg">Er zijn nog geen nieuwsberichten.</p>
            @endif
        </div>
    </section>
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
            }, { threshold: 0.1 });
            document.querySelectorAll('.animate-fade-in-up').forEach(el => observer.observe(el));
        });
    </script>
    @endpush
</x-app-layout>
