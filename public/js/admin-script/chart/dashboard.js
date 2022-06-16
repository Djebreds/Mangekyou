var chartOrders = document.getElementById("orders").getContext("2d");
const gradientOrders = chartOrders.createLinearGradient(0, 0, 0, 200);

gradientOrders.addColorStop(1, "white");
gradientOrders.addColorStop(0.47, "white");
gradientOrders.addColorStop(0.03, "#8441F5");

var data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    datasets: [
        {
            fill: true,
            label: "Orders",
            backgroundColor: gradientOrders,
            borderColor: "#520BC2",
            borderWidth: 3,
            hoverBackgroundColor: "rgba(255,99,132,0.4)",
            hoverBorderColor: "rgba(255,99,132,1)",
            tension: 0.4,
            pointRadius: 1,
            data: [0, 10, 20, 40, 80, 90, 60],
        },
    ],
};

var option = {
    responsive: false,
    plugins: {
        legend: {
            display: false,
        },
        labels: {
            display: false,
        },
        datalabels: {
            display: false,
        },
        title: {
            display: false,
        },
    },
    scales: {
        yAxes: {
            stacked: false,
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
            beginAtZero: true,
        },
        xAxes: {
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
        },
    },
};

new Chart("orders", {
    type: "line",
    options: option,
    data: data,
});
// ==================== End Chart Orders ======================== //

// ==================== Chart Users ======================== //
var chartUser = document.getElementById("users").getContext("2d");
const gradientUser = chartOrders.createLinearGradient(0, 0, 0, 200);

gradientUser.addColorStop(1, "white");
gradientUser.addColorStop(0.47, "white");
gradientUser.addColorStop(0.03, "#8441F5");

var data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    datasets: [
        {
            fill: true,
            label: "Orders",
            backgroundColor: gradientUser,
            borderColor: "#520BC2",
            borderWidth: 3,
            hoverBackgroundColor: "rgba(255,99,132,0.4)",
            hoverBorderColor: "rgba(255,99,132,1)",
            pointRadius: 1,
            data: [5, 12, 40, 59, 30, 40, 30],
        },
    ],
};

var option = {
    responsive: false,
    plugins: {
        legend: {
            display: false,
        },
        labels: {
            display: false,
        },
        datalabels: {
            display: false,
        },
        title: {
            display: false,
        },
    },
    scales: {
        yAxes: {
            stacked: false,
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
            beginAtZero: true,
        },
        xAxes: {
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
        },
    },
};

new Chart("users", {
    type: "line",
    options: option,
    data: data,
});

// ==================== End Chart Users ======================== //

// ==================== Chart Products ======================== //

var chartUser = document.getElementById("products").getContext("2d");
const gradientProduct = chartOrders.createLinearGradient(0, 0, 0, 200);

gradientProduct.addColorStop(1, "white");
gradientProduct.addColorStop(0.47, "white");
gradientProduct.addColorStop(0.03, "#8441F5");

var data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    datasets: [
        {
            fill: true,
            label: "Orders",
            backgroundColor: gradientProduct,
            borderColor: "#520BC2",
            borderWidth: 3,
            hoverBackgroundColor: "rgba(255,99,132,0.4)",
            hoverBorderColor: "rgba(255,99,132,1)",
            pointRadius: 1,
            data: [5, 20, 39, 29, 30, 23, 24],
        },
    ],
};

var option = {
    responsive: false,
    plugins: {
        legend: {
            display: false,
        },
        labels: {
            display: false,
        },
        datalabels: {
            display: false,
        },
        title: {
            display: false,
        },
    },
    scales: {
        yAxes: {
            stacked: false,
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
            beginAtZero: true,
        },
        xAxes: {
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
        },
    },
};

new Chart("products", {
    type: "line",
    options: option,
    data: data,
});

// ==================== End Chart Products ======================== //

// ==================== Chart Stores ======================== //

var chartUser = document.getElementById("stores").getContext("2d");
const gradientStore = chartOrders.createLinearGradient(0, 0, 0, 200);

gradientStore.addColorStop(1, "white");
gradientStore.addColorStop(0.47, "white");
gradientStore.addColorStop(0.03, "#8441F5");

var data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    datasets: [
        {
            fill: true,
            label: "Orders",
            backgroundColor: gradientStore,
            borderColor: "#520BC2",
            borderWidth: 3,
            hoverBackgroundColor: "rgba(255,99,132,0.4)",
            hoverBorderColor: "rgba(255,99,132,1)",
            pointRadius: 1,
            data: [10, 14, 24, 22, 25, 27, 20],
        },
    ],
};

var option = {
    responsive: false,
    plugins: {
        legend: {
            display: false,
        },
        labels: {
            display: false,
        },
        datalabels: {
            display: false,
        },
        title: {
            display: false,
        },
    },
    scales: {
        yAxes: {
            stacked: false,
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
            beginAtZero: true,
        },
        xAxes: {
            grid: {
                display: false,
                drawBorder: false,
            },
            ticks: {
                display: false,
            },
        },
    },
};

new Chart("stores", {
    type: "line",
    options: option,
    data: data,
});

// ==================== End Chart Stores ======================== //
