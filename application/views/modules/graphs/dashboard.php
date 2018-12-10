<script>
    var ctx1 = document.getElementById("barChart").getContext('2d');
    var barChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Ventilator", "General X-Ray", "Hemodialysis", "RO Plant"],
            datasets: [
                {
                    label: 'Not Completed',
                    data: [10, 20, 18, 40],
                    backgroundColor: [
                        'rgb(65,105,225)',
                        'rgb(65,105,225)',
                        'rgb(65,105,225)',
                        'rgb(65,105,225)',
                    ]
                },
                {
                    label: 'Completed',
                    data: [90, 80, 82, 60],
                    backgroundColor: [
                        'rgb(255,127,80)',
                        'rgb(255,127,80)',
                        'rgb(255,127,80)',
                        'rgb(255,127,80)'
                    ]
                }
            ]
        },
        options: {
            scales: {
                xAxes: [{
                        stacked: true
                }],
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        stacked: true
                    }]
            }
        }
    });
    
    var crm = document.getElementById("crmChart").getContext('2d');
    var barChart = new Chart(crm, {
        type: 'horizontalBar',
        data: {
            labels: [
                "Personal Appearance (Technical)",
                "Feedback and Technical Advice",
                "Repair Skill",
                "PPM Quality"],
            datasets: [{
                    label: false,
                    data: [37, 24, 50, 13],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Weekly/Monthly'
            },
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
    
    var crmRoundActivity = document.getElementById("crmRoundActivityChart").getContext('2d');
    var barChart = new Chart(crmRoundActivity, {
        type: 'horizontalBar',
        data: {
            labels: [
                "Supervisor D",
                "Supervisor C",
                "Supervisor B",
                "Supervisor A"],
            datasets: [{
                    label: false,
                    data: [37, 20, 50, 13],
                    backgroundColor: [
                        'rgb(72,61,139)',
                        'rgb(72,61,139)',
                        'rgb(72,61,139)',
                        'rgb(72,61,139)'
                    ]
                }]
        },
        options: {
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Weekly/Monthly'
            },
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
    
    var sparePart = document.getElementById("sparePartChart").getContext('2d');
    var barChart = new Chart(sparePart, {
        type: 'bar',
        data: {
            labels: [
                "Battery Pack",
                "SPO2 Sensor",
                "BP Cuff",
                " ", 
                " ", 
                " "
            ],
            datasets: [{
                    label: false,
                    data: [5, 12, 23, 24, 9, 3],
                    backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Weekly/Monthly'
            },
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>