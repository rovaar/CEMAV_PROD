{{-- Entitat del centre (MedicalClinic, @id #clinica). Una sola font per a la portada i
     /contacte (SEO-11, SEO-44): si canvia l'adreça, el telèfon o l'horari, es canvia aquí.
     La resta de pàgines hi fan referència amb {"@id": "https://www.cemavvic.cat/#clinica"}. --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "@id": "https://www.cemavvic.cat/#clinica",
      "name": "CEMAV - Centre de Medicina Amable de Vic",
      "alternateName": "CEMAV",
      "description": "Centre medic a Vic amb especialitats i serveis per a visites privades i mutues assistencials.",
      "url": "https://www.cemavvic.cat",
      "logo": "https://www.cemavvic.cat/img/logoPrincipal.webp",
      "image": "https://www.cemavvic.cat/img/og-cemav.webp",
      "telephone": "+34938894602",
      "email": "noucemav@gmail.com",
      "foundingDate": "2002-05-02",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Carrer Bisbe Strauch, 16",
        "addressLocality": "Vic",
        "addressRegion": "Catalunya",
        "postalCode": "08500",
        "addressCountry": "ES"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.92327,
        "longitude": 2.24910
      },
      "hasMap": "https://www.google.com/maps/search/CEMAV+Centre+Medicina+Amable+Vic",
      "areaServed": [
        { "@type": "City", "name": "Vic" },
        { "@type": "AdministrativeArea", "name": "Osona" }
      ],
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00",
          "closes": "14:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "15:00",
          "closes": "20:00"
        }
      ],
      "medicalSpecialty": [
        "https://schema.org/Dentistry",
        "https://schema.org/Podiatric",
        "https://schema.org/Physiotherapy",
        "https://schema.org/Optometric",
        "https://schema.org/DietNutrition",
        "https://schema.org/Urologic",
        "https://schema.org/Ophthalmologic",
        "https://schema.org/Musculoskeletal",
        "https://schema.org/Dermatology",
        "https://schema.org/Nursing"
      ]
    }
    </script>
