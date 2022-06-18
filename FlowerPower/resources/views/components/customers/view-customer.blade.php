<div>
    <div>
        <h3>Klant gegevens: <a style="btn" href="/apps/klant/bewerken/{{ $customer->Klant_ID }}"><i class="material-icons">mode_edit</i></a></h3>
        <div class="card-columns">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Persoonlijke gegevens:</h5>
                    <p><b>Klant ID:</b> {{ $customer->Klant_ID}}</p>
                    <p><b>Voornaam:</b> {{ $customer->Klant_Voornaam }}</p>
                    <p><b>Tussenvoegsels:</b> {{ $customer->Klant_Tussenvoegsel }}</p>
                    <p><b>Achternaam:</b> {{ $customer->Klant_Achternaam }}</p>
                    <p><b>Volledige naam:</b> {{ $customer->Klant_Voornaam }} {{ $customer->Klant_Tussenvoegsel }} {{
                        $customer->Klant_Achternaam }}</p>
                    <p><b>Email:</b> {{ $customer->Klant_Email }}</p>
                    <p><b>Telefoon nummer:</b> {{ $customer->Klant_Telefoon_1 }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adres gegevens:</h5>
                    <p><b>Land:</b> {{ $customer->Klant_Land }}</p>
                    <p><b>Woonplaats:</b> {{ $customer->Klant_Woonplaats }}</p>
                    <p><b>Postcode:</b> {{ $customer->Klant_Postcode }}</p>
                    <p><b>Straat:</b> {{ $customer->Klant_Adres }}</p>
                    <p><b>Huisnummer:</b> {{ $customer->Klant_Huisnummer }}</p>
                    <p><b>Volledige adres:</b> {{ $customer->Klant_Land }}, {{ $customer->Klant_Woonplaats }}, {{ $customer->Klant_Postcode }}, {{ $customer->Klant_Adres }} {{ $customer->Klant_Huisnummer }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bedrijf gegevens:</h5>
                    <p><b>Bedrijf:</b> {{ $customer->Klant_Bedrijf }}</p>
                    <p><b>Extra 1:</b> {{ $customer->Klant_Bedrijf_extra_veld_1 }}</p>
                    <p><b>Extra 2:</b> {{ $customer->Klant_Bedrijf_extra_veld_2 }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bank gegevens:</h5>
                    <p><b>Rekening:</b> {{ $customer->Klant_Rekening_1 }}</p>
                    <p><b>BTW:</b> {{ $customer->Klant_BTW }}</p>
                    <p><b>Korting:</b> {{ $customer->Klant_Korting }}</p>
                    <p><b>Sponsor:</b> {{ $customer->Klant_Sponsor }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Overige gegevens:</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="klantwilmail" disabled @if($customer->Klant_wil_mail == 1) checked @endif>
                        <label class="form-check-label" for="websiteENG">
                            <b>Klant wil mail</b>
                        </label>
                    </div>
                    <p><b>Toevoegsel:</b> {{ $customer->Klant_Toevoegsel }}</p>
                </div>
            </div>
        </div>
