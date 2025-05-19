document.addEventListener("DOMContentLoaded", function () {
    const citySelect = document.getElementById("city");
    const tableBody = document.getElementById("schedule-body");

    function fetchPrayerTimes(city) {
        const url = `https://api.aladhan.com/v1/timingsByCity?city=${city}&country=Saudi%20Arabia&method=4`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                const timings = data.data.timings;
                tableBody.innerHTML = `
                    <tr> <td>Loud</td><td>Fajr</td><td>${timings.Fajr}</td></tr>
                    <tr> <td rowspan="2" >Silent</td><td>Dhuhr</td><td>${timings.Dhuhr}</td></tr>
                    <tr><td>Asr</td><td>${timings.Asr}</td></tr>
                    <tr><td rowspan="2">Loud</td><td>Maghrib</td><td>${timings.Maghrib}</td></tr>
                    <tr><td>Isha</td><td>${timings.Isha}</td></tr>
                `;
            })
            .catch(error => {
                tableBody.innerHTML = `<tr><td colspan="2">Failed to load data.</td></tr>`;
                console.error("Error fetching prayer times:", error);
            });
    }

    // Initial fetch
    fetchPrayerTimes(citySelect.value);

    // Update on city change
    citySelect.addEventListener("change", function () {
        fetchPrayerTimes(this.value);
    });
});
