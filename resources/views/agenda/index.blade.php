<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Agenda"
        subtitle="Onze activiteiten en evenementen"
    />
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if($events->isNotEmpty())
                <div class="space-y-6">
                    @foreach($events as $event)
                        <x-event-card :event="$event" />
                    @endforeach
                </div>
                <div class="mt-12">
                    {{ $events->links() }}
                </div>
            @else
                <p class="text-center text-white/70 text-lg">Er zijn nog geen aankomende evenementen.</p>
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
