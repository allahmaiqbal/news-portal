// bootstrap application with required js dependency
import "./bootstrap";

// register react components
import "./registerReactComponents";
// register vue components
import './registerVueComponents';

// import all static assets
import.meta.glob([
    '../statics/**',
]);
