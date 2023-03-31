import React, {useState} from "react";
import {createRoot} from "react-dom/client";

export default function DemoComponent() {
    const [count, setCount] = useState(0)

    const increase = () => {
        setCount(prev => prev + 1)
    }

    const decrease = () => {
        setCount(prev => prev - 1)
    }

    return (
        <>
            <h1>Welcome to React with Vite in Users Module!</h1>
            <p>
                To get started, edit{" "}
                <code>Modules/Users/Resources/assets/js/registerReactComponents.js</code> and save to
                reload.
            </p>

            <div className="text-center">
                <p>Count: {count}</p>
                <button className="btn btn-sm btn-primary" onClick={increase}>Increase</button>
                <button className="btn btn-sm btn-primary ms-2" onClick={decrease}>Decrease</button>
            </div>
        </>
    );
}

if (document.getElementById("reactRoot")) {
    const root = createRoot(document.getElementById("reactRoot"));
    root.render(<DemoComponent/>);
}
