# provably-fair
Independently verify any AbsoluteBit scratch ticket

### How it works
AbsoluteBit uses a system of verification that allows users to check the integrity of every scratch ticket and confirm they are not manipulated.

Random numbers are generated through the use of two seeds: a server seed, and your client seed. The server seed is hashed and displayed before the game begins, ensuring that a scratch ticket cannot be modified mid-game.

The game board is decided when a bet is placed, before any pieces are scratched. After placing a bet to start the game, the long string of numbers that shows up underneath the scratch ticket represents mathematical proof of that.

That string is important because it is used in the randomization of the scratch ticket and the scratch ticket cannot be changed unless that string of numbers also changes. When a game is finished, that string becomes a link so that you can see all of the relevant numbers needed to independently verify the scratch ticket was not manipulated and that you received a fair game.

It's also important to realize that the website can't possibly know which order you will scratch, so proving that the scratch ticket didn't change mid-game is what makes it provably fair.

### How to verify
- Insert "Secret Server Seed" into $server_seed
- Insert "Client Seed" into $client_seed
- Run PHP script
- Check that "Hashed Server Seed" matches the one shown before the game started
- Check that "Answer Key" matches the one shown after game ended
