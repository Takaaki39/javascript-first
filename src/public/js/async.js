function fetchData(id) {
    return new Promise((resolve, reject) => {
        console.log("データを取得しています...");

        setTimeout(() => {
            if (id <= 0) reject(new Error("無効なIDです"));
            else {
                resolve({
                    id: id,
                    title: "データ ${id}",
                    createdAt: new Date().toISOString(),
                });
            }
        }, 1000);
    });
}

// 成功パターン
fetchData(1)
    .then((data) => {
        console.log("取得成功", data);
    })
    .catch((error) => {
        console.error("エラー：", error.message);
    });

// 失敗パターン
fetchData(-1)
    .then((data) => {
        console.log("取得成功:", data);
    })
    .catch((error) => {
        console.error("エラー:", error.message);
    });
