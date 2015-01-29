# provably-fair
Independently verify any AbsoluteBit scratch ticket

### How it works
AbsoluteBit uses a system of verification that allows users to check the integrity of every scratch ticket and confirm they are not manipulated.

Random numbers are generated through the use of two seeds: a server seed, and your client seed. The server seed is hashed and displayed before the game begins, ensuring that a scratch ticket cannot be modified mid-game.

### How to verify
- Insert "Secret Server Seed" into $server_seed
- Insert "Client Seed" into $client_seed
- Run PHP script
- Check that "Hashed Server Seed" matches the one shown before the game starts
- Check that "Answer Key" matches the one shown after game ended
