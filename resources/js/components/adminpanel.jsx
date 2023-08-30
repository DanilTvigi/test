import React, { useState } from 'react';
import ReactDOM from 'react-dom/client';

function AdminPanel() {
    const [isBlockVisible, setBlockVisible] = useState(false);

    const toggleBlock = () => {
        setBlockVisible(!isBlockVisible);
    };

    return (
        <div className="row justify-content-center py-2">
            <div className="col-md-8">
                <div className="card">
                    <div className="card-header text-center fs-5">Административная панель</div>
                    <div className="card-header text-center">
                        <button className="btn" onClick={toggleBlock}>
                            <img
                                src="https://mywebicons.ru/i/png/f437f75c80b33a3539ab8aa076e35437.png"
                                alt="s"
                                style={{ height: "20px" }}
                            />
                        </button>
                    </div>
                    {isBlockVisible && (
                        <div className="card-body">
                            <div className="popup-block">
                                <div className="popup-content">
                                    Анимированный всплывающий блок
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            </div>
        </div>
    );
}

export default AdminPanel;

if (document.getElementById('adminpanel')) {
    const Index = ReactDOM.createRoot(document.getElementById("adminpanel"));

    Index.render(
        <React.StrictMode>
            <AdminPanel/>
        </React.StrictMode>
    )
}
