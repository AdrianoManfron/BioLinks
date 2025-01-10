<x-layout.app>
    <x-container>
        <x-card title="Registre-se">
            <x-form :route="route('register')" post id="form-register">
                <x-input type="text" name="name" placeholder="Digite o seu nome..." value="{{ old('name') }}" />
                <x-input type="text" name="email" placeholder="Digite o seu e-mail..." value="{{ old('email') }}" />
                <x-input type="text" name="email_confirmation" placeholder="Confirme o seu e-mail..." />
                <x-input type="password" name="password" placeholder="Digite a sua senha..." />
            </x-form>

            <x-slot:actions>
                <x-a :href="route('login')">Você já tem conta?</x-a>
                <x-button type="submit" form="form-register">Registrar-se</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
