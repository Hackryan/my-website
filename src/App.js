import React from 'react';

function App() {
  return (
    <div className="App">
      {/* Header */}
      <header>
        <h1>Welcome to My React Homepage</h1>
        <p>Your place for amazing content</p>
      </header>

      {/* Main Content */}
      <main>
        <section className="content">
          <h2>About Us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget
            purus vel ex suscipit suscipit. Vestibulum tristique laoreet urna,
            ac volutpat metus venenatis eu.
          </p>
        </section>

        <section className="content">
          <h2>Our Services</h2>
          <ul>
            <li>Service 1</li>
            <li>Service 2</li>
            <li>Service 3</li>
          </ul>
        </section>
      </main>
    </div>
  );
}

export default App;
